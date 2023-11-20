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
        // return $formData;

        $mandate = Mandate::find($formData["mandate"]);
        if (!$mandate) {
            return self::sendError("Cette mandature n'existe pas!", 404);
        }

        $company = Company::find($formData["company"]);
        if (!$company) {
            return self::sendError("Cette entreprise n'existe pas!", 404);
        }

        $consular = ElectedConsular::with(["company_fonction_mandate"])->find($consular);
        if (!$consular) {
            return self::sendError("Cet élu consulaire n'existe pas!", 404);
        }

        // return $consular->company_fonction_mandate;

        #CETTE VARIABLE PERMET DE SAVOIR SI CE ELU APPARTIENT A CETTYE MANDATURE OU PAS
        $is_this_electedConsular_has_this_mandate = false;
        foreach ($consular->company_fonction_mandate as $company_fonction_mandate) {
            $mandate = $company_fonction_mandate->mandate;
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
        foreach ($consular->company_fonction_mandate as $company_fonction_mandate) {
            $company = $company_fonction_mandate->company;
            if ($company->id == $formData["company"]) {
                $is_this_electedConsular_has_this_company = true;
            }
        }

        if (!$is_this_electedConsular_has_this_company) {
            return self::sendError("Ce élu consulaire n'appartient pas à cette entreprise", 505);
        }

        ##__
        $reference = Custom_Timestamp();
        $pdf = PDF::loadView('card-exemple', compact(["consular", "reference"]));
        $pdf->save(public_path("cards/" . $reference . ".pdf"));
        ###____

        $cardpdf_path = asset("cards/" . $reference . ".pdf");

        ##__
        $formData["reference"] = $reference;
        $formData["consular"] = $consular;

        #GENERATION DE LA CARTE DANS LA DB
        $card = Card::create($formData);
        return self::sendResponse($card, "Carte générée a vec succès!!");
    }

    static function allCards()
    {
        $user = request()->user();

        $cards =  Card::where("owner", $user->id)->orderBy('id', 'desc')->get();

        return self::sendResponse($cards, 'Toutes les cartes récupérés avec succès!!');
    }

    static function _retrieveCard($id)
    {
        $user = request()->user();
        $card = Card::with(['owner', "category", "type", "inventory"])->find($id);
        if (!$card) {
            return self::sendError("Cette Carte n'existe pas!", 404);
        }
        return self::sendResponse($card, "Carte récupérée avec succès:!!");
    }

    static function _updateCarte($request, $id)
    {
        $user = request()->user();

        $formData = $request->all();
        $card = Product::where(["visible" => 1])->find($id);
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
