<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Card;
use App\Models\Company;
use App\Models\ElectedConsular;
use App\Models\Mandate;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use PDF;


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

        // return $_consular->company_fonction_mandate;

        #CETTE VARIABLE PERMET DE SAVOIR SI CE ELU APPARTIENT A CETTYE MANDATURE OU PAS
        $is_this_electedConsular_has_this_mandate = false;
        foreach ($_consular->company_fonction_mandate as $company_fonction_mandate) {
            $mandate = $company_fonction_mandate->mandate;
            // return $mandate;
            if ($mandate->id == $formData["mandate"]) {
                $is_this_electedConsular_has_this_mandate = true;
            }
        }

        if (!$is_this_electedConsular_has_this_mandate) {
            return self::sendError("Ce élu consulaire n'appartient pas à cette mandature", 505);
        }

        // return $is_this_electedConsular_has_this_mandate;
        #CETTE VARIABLE PERMET DE SAVOIR SI CE ELU APPARTIENT A CETTE ENTREPRISE OU PAS
        $is_this_electedConsular_has_this_company = false;
        foreach ($_consular->company_fonction_mandate as $company_fonction_mandate) {
            $company = $company_fonction_mandate->company;
            if ($company->id == $formData["company"]) {
                $is_this_electedConsular_has_this_company = true;
            }
        }

        if (!$is_this_electedConsular_has_this_company) {
            return self::sendError("Ce élu consulaire n'appartient pas à cette entreprise", 505);
        }

        ##__
        $reference = Get_Username($user, "CCIB_");
        // $pdf = PDF::loadView('card', compact(["consular", "reference"]));
        // $pdf->save(public_path("cards/" . $reference . ".pdf"));
        // ###____

        // $card_img = asset("cards/" . $reference . ".pdf");
        // return $consular->company_fonction_mandate;
        ##__
        $formData["reference"] = $reference;
        $formData["consular"] = $consular;
        // $formData["company"] = $consular->company_fonction_mandate;

        #GENERATION DE LA CARTE DANS LA DB
        $card = Card::create($formData);
        return self::sendResponse($card, "Carte générée avec succès!!");
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
}
