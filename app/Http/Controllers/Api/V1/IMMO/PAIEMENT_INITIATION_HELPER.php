<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\AccountSold;
use App\Models\PaiementInitiation;
use App\Models\Proprietor;
use Illuminate\Support\Facades\Validator;

class PAIEMENT_INITIATION_HELPER extends BASE_HELPER
{
    ##======== PAIEMENT INITIATION VALIDATION =======##
    static function paiement_initiation_rules(): array
    {
        return [
            'proprietor' => ['required', "integer"],
            'amount' => ['required', "numeric"],
            // 'comments' => ['required'],
        ];
    }

    static function paiement_initiation_messages(): array
    {
        return [
            'proprietor.required' => 'Le proprietaire est réquis!',
            'proprietor.integer' => "Ce Champ doit être de type entier!",

            'amount.required' => "Le montant à initier est réquis!",
            'amount.numeric' => "Le montant doit être de type numérique",

            // 'comments.required' => "Veuillez bien laisser un commentaire!",
        ];
    }

    static function Paiement_initiation_Validator($formDatas)
    {
        $rules = self::paiement_initiation_rules();
        $messages = self::paiement_initiation_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function initiatePaiementToProprio($request)
    {
        $formData = $request->all();
        $user = request()->user();


        ###___TRAITEMENT DES DATAS
        $proprietor = Proprietor::with(["Owner", "City", "Country", "TypeCard", "Houses"])->find($formData["proprietor"]);

        if (!$proprietor) {
            return self::sendError("Ce propriétaire n'existe pas!", 404);
        }

        ###__==========VERIFIONS D'ABORD LA SUFFISANCE DU SOLDE DU COIMPTE LOYER POUR EFFECTUER CETTE INITIATION ===========#

        ###__VOYONS D'ABORD S'IL S'AGIT D'UN CHET COMPTABLE
        if (Is_User_Has_A_Chief_Accountant_Role($user->id)) {
            ##~~on attaque le compte loyer
            $accountSold = AccountSold::where(["account" => 6, "visible" => 1])->first();

            if (!$accountSold) {
                return self::sendError("Le compte Loyer ne dispose pas encore de sold! Veuillez à ce qu'il soit d'abord créditer!", 505);
            }
            if ($accountSold->sold < $formData["amount"]) {
                return self::sendError("Le sold du compte Loyer est insuffisant pour faire cette initiation!", 505);
            }
        } elseif (Is_User_Has_An_Agent_Accountant_Role($user->id)) {
            ##~~si c'est un agent comptable
            ##~~on attaque le compte CPP(Caisse Paiement Proprietaire)

            $accountSold = AccountSold::where(["account" => 11, "visible" => 1])->first();

            if (!$accountSold) {
                return self::sendError("Le compte CPP(Caisse Paiement Proprietaire) ne dispose pas encore de sold! Veuillez à ce qu'il soit d'abord créditer!", 505);
            }
            if ($accountSold->sold < $formData["amount"]) {
                return self::sendError("Le sold du compte Loyer est insuffisant pour faire cette initiation!", 505);
            }
        } else {
            return self::sendError("Vous n'êtes ni un Chef Comptable, ni un Agent comptable! Vous ne pouvez donc pas initier un paiement", 505);
        }


        ###__ENREGISTREMENT DU PAIEMENT DANS LA DB
        $formData["manager"] = $user->id;
        $formData["status"] = 1;
        $formData["comments"] = "Initiation de paiement d'une somme de (" . $formData["amount"] . " ) au proprietaire (" . $proprietor->firstname . " " . $proprietor->lastname . " )";
        $PaiementInitiation = PaiementInitiation::create($formData);

        ##__
        return self::sendResponse($PaiementInitiation, "Paiement initié au proprietaire (" . $proprietor->firstname . " " . $proprietor->lastname . " ) avec succès!");
    }

    static function getPaiementInitiations()
    {
        $user = request()->user();
        $PaiementInitiations = PaiementInitiation::with(["Manager", "Status", "Proprietor"])->orderBy("id", "desc")->get();
        return self::sendResponse($PaiementInitiations, 'Toutes les initiations de paiements récupérés avec succès!!');
    }

    static function _retrievePaiementInitiation($id)
    {
        $user = request()->user();
        $Paiement = PaiementInitiation::with(["Manager", "Status", "Proprietor"])->find($id);
        return self::sendResponse($Paiement, "Initiation de Paiement récupérée avec succès!!");
    }

    static function _validePaiementInitiation($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();

        $PaiementInitiation = PaiementInitiation::find($id);

        ##__Le proprio attché à cette initiation
        $proprietor = $PaiementInitiation->Proprietor;

        if (!$PaiementInitiation) {
            return self::sendError("Cette initiation de paiement n'existe pas!", 404);
        };

        if ($PaiementInitiation->status == 2) {
            return self::sendError("Cette initiation de paiement a été déjà validée", 505);
        };

        ###__VOYONS D'ABORD SI L'INITIATEUR DE CE PAIEMENT EST UN CHET COMPTABLE
        if (Is_User_Has_A_Chief_Accountant_Role($PaiementInitiation->manager)) {
            ##~~on attaque le compte loyer
            $accountSold = AccountSold::where(["account" => 6, "visible" => 1])->first();
        } elseif (Is_User_Has_An_Agent_Accountant_Role($PaiementInitiation->manager)) {
            ##~~si c'est un agent comptable
            ##~~on attaque le compte CPP(Caisse Paiement Proprietaire)
            $accountSold = AccountSold::where(["account" => 11, "visible" => 1])->first();
        }

        ####____CHANGEMENT DE STATUS SUR 2(validée)
        $PaiementInitiation->status = 2;
        $PaiementInitiation->save();

        ###__DECREDITATION DU SOLD DU COMPTE LOYER
        #~~deconsiderons l'ancien sold
        $accountSold->visible = 0;
        $accountSold->delete_at = now();
        $accountSold->save();

        // #~~Considerons un nouveau sold
        $data["owner"] = $user->id;
        $data["account"] = $accountSold->account;
        $data["sold"] = $accountSold->sold - $PaiementInitiation->amount;
        $data["description"] = "Décaissement du sold du compte Loyer pour initiation de paiement au proprietaire (" . $proprietor->firstname . " " . $proprietor->lastname . " )";
        AccountSold::create($data);

        ##___

        return self::sendResponse($PaiementInitiation, 'Initiation de paiement validé avec succès!');
    }
}
