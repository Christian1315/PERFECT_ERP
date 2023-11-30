<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Etiquette;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PRODUCT_ETIQUETTE_HELPER extends BASE_HELPER
{
    ##======== ETIQUETTE VALIDATION =======##

    static function product_etiquette_rules(): array
    {
        return [
            'name' => ['required', Rule::unique("etiquettes")],
        ];
    }

    static function product_etiquette_messages(): array
    {
        return [
            'name.required' => 'Le champ name est réquis!',
        ];
    }

    static function Product_etiquette_Validator($formDatas)
    {
        $rules = self::product_etiquette_rules();
        $messages = self::product_etiquette_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function _createProductEtiquette($formData)
    {
        $user = request()->user();
        $product_Etiquette = Etiquette::create($formData);
        return self::sendResponse($product_Etiquette, 'Etiquette de produit crée avec succès!!');
    }
    static function allProductEtiquette()
    {
        $user = request()->user();
        $product_Etiquette =  Etiquette::orderBy('id', 'desc')->get();
        return self::sendResponse($product_Etiquette, 'Toute les categories de produits récupérés avec succès!!');
    }

    static function _retrieveProductEtiquette($id)
    {
        $user = request()->user();
        $product_Etiquette = Etiquette::find($id);
        if (!$product_Etiquette) {
            return self::sendError("Cette etiquette de produit n'existe pas!", 404);
        }
        return self::sendResponse($product_Etiquette, "Etiquette de produit récupérée avec succès:!!");
    }
}
