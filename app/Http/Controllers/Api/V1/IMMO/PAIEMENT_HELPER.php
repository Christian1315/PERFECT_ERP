<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\City;
use App\Models\Country;
use App\Models\Departement;
use App\Models\Paiement;
use App\Models\PaiementModule;
use App\Models\PaiementStatus;
use App\Models\PaiementType;
use App\Models\Payement;
use App\Models\Proprietor;
use App\Models\Quarter;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Support\Facades\Validator;

class PAIEMENT_HELPER extends BASE_HELPER
{
    ##======== PAIEMENT VALIDATION =======##

    static function paiement_rules(): array
    {
        return [
            'client' => ['required', "integer"],
            'module' => ['required', "integer"],
            'status' => ['required', "integer"],
            'type' => ['required', "integer"],

            'amount' => ['required', "numeric"],
            'reference' => ['required'],
            'comments' => ['required'],

            'start_date' => ['required', "date"],
            'end_date' => ['required', "date"],
        ];
    }

    static function paiement_messages(): array
    {
        return [
            'client.required' => 'Le client  est réquis!',
            'module.required' => "Le module de paiement est réquis!",
            'status.required' => "Le status de paiement est réquis!",
            'type.required' => "Le type de paiement est réquis!",

            'amount.required' => "Le montant est réquis",
            'comments.required' => "Le commentaire est réquise",

            'start_date.required' => "La date de début est réquise",
            'end_date.required' => "La date de fin est réquise",

            'client.integer' => "Ce champ doit être de type entier!",
            'module.integer' => "Ce champ doit être de type entier!",
            'status.integer' => "Ce champ doit être de type entier!",
            'type.integer' => "Ce champ doit être de type entier!",

            'reference.required' => "La reference est réquise!",

            'amount.numeric' => "Ce champ doit être de type numéric!",

            'start_date.date' => "Ce champ doit être de type date!",
            'end_date.date' => "Ce champ doit être de type date!",
        ];
    }

    static function Paiement_Validator($formDatas)
    {
        $rules = self::paiement_rules();
        $messages = self::paiement_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addPaiement($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###___TRAITEMENT DES DATAS
        $client = User::find($formData["client"]);
        $module = PaiementModule::find($formData["module"]);
        $status = PaiementStatus::find($formData["status"]);
        $type = PaiementType::find($formData["type"]);


        if (!$client) {
            return self::sendError("Ce Client n'existe pas!", 404);
        }
        if (!$module) {
            return self::sendError("Ce Module de paiement n'existe pas!", 404);
        }
        if (!$status) {
            return self::sendError("Ce status de paiement n'existe pas!", 404);
        }
        if (!$type) {
            return self::sendError("Ce type de paiement n'existe pas!", 404);
        }

        ###__ENREGISTREMENT DU PMAIEMENT DANS LA DB
        $formData["owner"] = $user->id;
        $Paiement = Payement::create($formData);

        return self::sendResponse($Paiement, "Paiement ajouté avec succès!!");
    }

    static function getPaiements()
    {
        $user = request()->user();
        $Paiements = Payement::with(["Owner", "Module", "Type", "Client", "Status"])->get();
        return self::sendResponse($Paiements, 'Tout les paiements récupérés avec succès!!');
    }

    static function _retrievePaiement($id)
    {
        $user = request()->user();
        $Paiement = Payement::with(["Owner", "Module", "Type", "Client", "Status"])->find($id);
        if (!$Paiement) {
            return self::sendError("Ce paiement n'existe pas!", 404);
        }
        return self::sendResponse($Paiement, "Paiement récupéré avec succès:!!");
    }

    static function _updatePaiement($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $Paiement = Payement::find($id);
        if (!$Paiement) {
            return self::sendError("Paiement n'existe pas!", 404);
        };

        ####____TRAITEMENT DU TYPE DE PAIEMENT
        if ($request->get("type")) {
            $type = PaiementType::find($request->get("type"));
            if (!$type) {
                return self::sendError("Ce type de paiement n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU MODULE DE PROPRIETAIRE
        if ($request->get("module")) {
            $module = PaiementModule::find($request->get("module"));

            if (!$module) {
                return self::sendError("Ce module de paiement n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU CLIENT
        if ($request->get("client")) {
            $client = User::find($request->get("client"));

            if (!$client) {
                return self::sendError("Ce client n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DE LA FACTURE
        if ($request->file("facture")) {
            $facture = $request->file("facture");
            $factureName = $facture->getClientOriginalName();
            $facture->move("paiementFactures", $factureName);
            $formData["facture"] = asset("paiementFactures/" . $factureName);
        }

        $Paiement->update($formData);
        return self::sendResponse($Paiement, 'Ce paiement a été modifié avec succès!');
    }
}
