<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Product;
use App\Models\SupplyProduct;
use Illuminate\Support\Facades\Validator;

class SUPLY_PRODUCT_HELPER extends BASE_HELPER
{
    ##======== ETIQUETTE VALIDATION =======##

    static function product_suply_rules(): array
    {
        return [
            'product' => ['required', "integer"],
            'comments' => ['required'],
            'quantity' => ['required', "numeric"],
        ];
    }

    static function product_suply_messages(): array
    {
        return [
            'product.required' => 'Le champ product est réquis!',
            'product.integer' => 'Le champ product doit être un entier!',

            'comments.required' => 'Veuillez préciser un commentaire!',

            'quantity.required' => 'Le champ product est réquis!',
            'quantity.numeric' => 'Le champ quantity doit être un entier!',
        ];
    }

    static function Product_suply_Validator($formDatas)
    {
        $rules = self::product_suply_rules();
        $messages = self::product_suply_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }
    
    static function _supplyProduct($request)
    {
        $formData = $request->all();
        $user = request()->user();
        $product = Product::find($formData["product"]);

        if (!$product) {
            return self::sendError("Ce produit n'existe pas!", 404);
        }
        $product_Suply = SupplyProduct::create($formData);
        return self::sendResponse($product_Suply, 'Approvisionnement éffectué avec succès!');
    }

    static function allProductSuply()
    {
        $user = request()->user();
        $product_Suply =  SupplyProduct::orderBy('id', 'desc')->get();
        return self::sendResponse($product_Suply, 'Tout les approvisionnement de produits récupérés avec succès!!');
    }

    static function _retrieveProductSuply($id)
    {
        $user = request()->user();
        $product_Suply = SupplyProduct::find($id);
        if (!$product_Suply) {
            return self::sendError("Cet approvisionnement de produit n'existe pas!", 404);
        }
        return self::sendResponse($product_Suply, "Approvisionnement de produit récupéré avec succès:!!");
    }
}
