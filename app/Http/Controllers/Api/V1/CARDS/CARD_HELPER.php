<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Card;
use App\Models\Company;
use App\Models\CompanyConsular;
use App\Models\ElectedConsular;
use App\Models\Mandate;
use App\Models\Poste;
use Illuminate\Support\Facades\Validator;
use PDF;
use QrCode;



class CARD_HELPER extends BASE_HELPER
{
    ##======== CARD VALIDATION =======##

    static function card_rules(): array
    {
        return [
            // 'consular' => ['required', "integer"],
            'mandate' => ['required', "integer"],
            'company' => ['required', "integer"],
        ];
    }

    static function card_messages(): array
    {
        return [
            // 'consular.required' => "Veuillez choisir une image!",
            'mandate.required' => 'Veuillez précisez la mandature de l\'elu consulaire!',
            'company.required' => 'Veuillez précisez l\'entreprise de l\'elu consulaire!',

            'mandate.integer' => 'La mandature doit être de type entier!',
            'company.integer' => 'L\'entreprise de l\'elu consulaire doit être de type entier!',
        ];
    }

    static function Card_Validator($formDatas)
    {
        $rules = self::card_rules();
        $messages = self::card_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function _generateCard($request, $consular)
    {
        $formData = $request->all();
        $user = request()->user();

        ##__
        $mandate = Mandate::where(["visible" => 1])->find($formData["mandate"]);
        if (!$mandate) {
            return self::sendError("Cette mandature n'existe pas!", 404);
        }

        $company = Company::where(["visible" => 1])->find($formData["company"]);
        if (!$company) {
            return self::sendError("Cette entreprise n'existe pas!", 404);
        }

        $_consular = ElectedConsular::with(["company_fonction_mandate"])->where(["visible" => 1])->find($consular);
        if (!$_consular) {
            return self::sendError("Cet élu consulaire n'existe pas!", 404);
        }

        ###___VERIFIONS SI CET ELU CONSULAIRE DISPOSE DEJA DE CETTE CARTE DANS CETTE ENTREPRISE ET PRECISEMENT DANS CETTE MANDATURE
        $is_this_card_existe = Card::where([
            "consular" => $consular,
            "company" => $formData["company"],
            "mandate" => $formData["mandate"],
        ])->first();

        if ($is_this_card_existe) {
            return self::sendError("Cet Elu consulaire dispose déjà de cette carte dans cette entreprise, pour cette mandature là!", 505);
        }

        ###__VERIFIONS SI CE ELU APPARTIENT A CETTE ENTREPRISE OU PAS
        $is_this_electedConsular_belongTo_this_company = false;
        // return $_consular->company_fonction_mandate;
        foreach ($_consular->company_fonction_mandate as $company_fonction_mandate) {
            $company = $company_fonction_mandate->company;
            if ($company->id == $formData["company"]) {
                $is_this_electedConsular_belongTo_this_company = true;
            }
        }

        if (!$is_this_electedConsular_belongTo_this_company) {
            return self::sendError("Cet élu consulaire n'appartient pas à cette entreprise dans cette mandature précisement", 505);
        }


        ##__VERIFIONS SI CET ELU APPARTIENT A CETTE MANDATURE OU PAS
        $is_this_electedConsular_belongTo_this_mandate = false;
        foreach ($_consular->company_fonction_mandate as $company_fonction_mandate) {
            $mandate = $company_fonction_mandate->mandate;
            if ($mandate->id == $formData["mandate"]) {
                $is_this_electedConsular_belongTo_this_mandate = true;
            }
        }

        if (!$is_this_electedConsular_belongTo_this_mandate) {
            return self::sendError("Cet élu consulaire n'appartient pas à cette mandature", 505);
        }

        ##__
        $reference = Get_Username($user, "CCIB_");

        ##__
        $formData["reference"] = $reference;
        $formData["consular_new"] = $consular;

        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $cretedCard = Card::create($formData);


        // #########################################################################
        // ##########____GENERATION DE LA CARTE EN FORMAT PDF_________######
        // $card = Card::with(["consular", "mandate", "company"])->find($cretedCard->id);
        // if (!$card) {
        //     return "Cette carte n'existe pas!";
        // }

        // return $card;
        // ##__CARTE INFOS
        // $card_mandate = Mandate::find($card->mandate);
        // $card_company = Company::find($card->company);

        // ##__ELECTED CONSULAR INFOS
        // $consular = ElectedConsular::with(["owner", "company_fonction_mandate", "postes"])->find($card->consular);

        // ##__ELECTED CONSULAR, FONCTION & POSTE
        // $company_fonction_mandate = CompanyConsular::where([
        //     "elected_consular" => $consular->id,
        //     "company_id" => $card_company->id,
        //     "mandate_id" => $card_company->id,
        // ])->first();

        // return $company_fonction_mandate;

        // ##__FONCTION DE L'ELU CONSULAIRE DANS L'ENTREPRISE
        // $fonction = $company_fonction_mandate->fonction;

        // ##__POSTE OCCUPE PAR L'ELU CONSULAIRE DANS CETTE MANDATURE
        // $poste = $company_fonction_mandate->mandate->poste->poste;

        // ###__TRAITEMENT VRAI DU PDF
        // $pdf = PDF::loadView('card', compact(["card", "consular", "card_mandate", "card_company", "fonction", "poste"]));
        // $pdf->save(public_path("cards/" . $cretedCard->reference . ".pdf"));

        // ###########################################################################


        // $card_img = asset("cards/" . $cretedCard->reference . ".pdf");
        // $cretedCard->card_img = $card_img;
        // $cretedCard->save();
        ##__

        ###_______GENERATION DU CODE QR DE CETTE CARTE
        $qrcode = "card_qrCode_" . $cretedCard->id . ".png";
        // QrCode::format("png")->size(100)->backgroundColor(32, 135, 131, 1)->merge("logo.png", .3, true)->generate("https://manager.perfect-erp.com/v1/repertory/$id/retrieve", "qrcodes/" . $qrcode);
        QrCode::format("png")->size(200)->generate("https://manager.perfect-erp.com/card/$cretedCard->id/show", "cardqrcodes/" . $qrcode);

        $cretedCard->qr_code = asset("cardqrcodes/" . $qrcode);
        $cretedCard->save();

        $cretedCard["card_Html_Url"] = env("APP_URL") . "/$cretedCard->id/card";

        return self::sendResponse($cretedCard, "Carte générée avec succès!!");
    }

    static function getCartes()
    {
        $user = request()->user();

        $cards = Card::with(["consular", "mandate", "company"])->get();

        return self::sendResponse($cards, 'Toutes les cartes récupérés avec succès!!');
    }

    static function _retrieveCard($id)
    {
        $user = request()->user();
        $card = Card::with(["consular", "mandate", "company"])->find($id);
        if (!$card) {
            return self::sendError("Cette Carte n'existe pas!", 404);
        }
        return self::sendResponse($card, "Carte récupérée avec succès:!!");
    }

    static function _updateCarte($request, $id)
    {
        $user = request()->user();

        $formData = $request->all();
        $card = Card::find($id);
        if (!$card) {
            return self::sendError("Cette Carte n'existe pas!", 404);
        };

        if ($card->owner != $user->id) {
            return self::sendError("Cette Carte ne vous appartient pas!", 404);
        }

        $card->update($formData);
        return self::sendResponse($card, 'Cette Carte a été modifiée avec succès!');
    }

    static function cardDelete($id)
    {
        $user = request()->user();

        $card = Card::where(["visible" => 1])->find($id);
        if (!$card) {
            return self::sendError("Cette Carte n'existe pas!", 404);
        };

        if ($card->owner != $user->id) {
            return self::sendError("Cette Carte ne vous appartient pas!", 404);
        }

        $card->visible = 0;
        $card->delete_at = now();
        $card->save();
        return self::sendResponse($card, 'Ce Produit a été supprimé avec succès!');
    }

    ###__RECUPERATION DES CARTES EN  FORMAT HTML
    function generateHtmlCard($id)
    {
        $card = Card::with(["consular", "mandate", "company"])->find($id);
        if (!$card) {
            return "Cette carte n'existe pas!";
        }

        ##__CARTE INFOS
        $card_mandate = Mandate::find($card->mandate);
        $card_company = Company::find($card->company);

        ##__ELECTED CONSULAR INFOS
        $consular = ElectedConsular::with(["owner", "company_fonction_mandate", "postes"])->find($card->consular_new);
        // dd($consular->postes);

        ##__ELECTED CONSULAR, FONCTION & POSTE
        $company_fonction_mandate = CompanyConsular::where([
            "elected_consular" => $consular->id,
            "company_id" => $card_company->id,
            "mandate_id" => $card_mandate->id,
        ])->first();

        ##__FONCTION DE L'ELU CONSULAIRE DANS L'ENTREPRISE

        $fonction = $company_fonction_mandate->fonction;

        ##__POSTE OCCUPE PAR L'ELU CONSULAIRE DANS CETTE MANDATURE
        $poste =  null;
        foreach ($consular->postes as $poste) {
            if ($poste->mandate_id == $card_mandate->id && $poste->elected_consular == $consular->id) {
                $poste = Poste::find($poste->id);
            }
        }
        return view("card-exemple", compact(["card", "consular", "card_mandate", "card_company", "fonction", "poste"]));
    }
}
