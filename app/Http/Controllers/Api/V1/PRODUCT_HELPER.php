<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Store;
use App\Models\StoreCategory;
use App\Models\StoreProduit;
use App\Models\StoreSupply;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PRODUCT_HELPER extends BASE_HELPER
{
    ##======== PRODUCT VALIDATION =======##

    static function product_rules(): array
    {
        return [
            'img' => ['required'],
            'name' => ['required'],
            'price' => ['required', "numeric"],
            'sale_price' => ['required', "numeric"],
            'sale_tax' => ['required', "numeric"],
            // 'inner_reference' => ['required'],
            // 'bar_code' => ['required'],
            'description' => ['required'],

            'can_be_sale' => ['required', "boolean"],
            'can_be_buy' => ['required', "boolean"],

            'category' => ['required', "integer"],
            'type' => ['required', "integer"],
        ];
    }

    static function product_messages(): array
    {
        return [
            'img.required' => "Veuillez choisir une image!",
            'name.required' => 'Le champ name est réquis!',
            'description.required' => 'Le champ description est réquis!',

            'category.required' => 'Le champ category est réquis!',
            'category.integer' => 'Le champ category doit être un entier!',

            'type.required' => 'Le champ product_type est réquis!',
            'type.integer' => 'Le champ type doit être un entier!',

            'price.required' => 'Le champ price est réquis!',
            'price.numeric' => 'Le champ price doit être un numérique!',

            'sale_price.required' => 'Le champ sale_price est réquis!',
            'sale_price.numeric' => 'Le champ sale_price doit être un numérique!',

            'sale_tax.required' => 'Le champ sale_tax est réquis!',
            'sale_tax.numeric' => 'Le champ sale_tax doit être un numérique!',

            'can_be_sale.required' => 'Le champ can_be_sale est réquis!',
            'can_be_sale.boolean' => 'Le champ can_be_sale doit être un booléen!',

            'can_be_buy.required' => 'Le champ can_be_buy est réquis!',
            'can_be_buy.boolean' => 'Le champ can_be_buy doit être un booléen!',
        ];
    }

    static function Product_Validator($formDatas)
    {
        $rules = self::product_rules();
        $messages = self::product_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ##======== SUPPLY PRODUCT VALIDATION =======##

    static function supply_product_rules(): array
    {
        return [
            'product_id' => ['required', 'integer'],
            'supply_id' => ['required', 'integer'],
        ];
    }

    static function supply_product_messages(): array
    {
        return [
            // 'name.required' => 'Le champ name est réquis!',
            // 'active.unique' => 'Cette action existe déjà',
            // 'description.required' => 'Le champ description est réquis!',
        ];
    }

    static function Supply_Product_Validator($formDatas)
    {
        $rules = self::supply_product_rules();
        $messages = self::supply_product_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }


    static function _createProduct($request)
    {
        $formData = $request->all();
        $user = request()->user();

        $product_type = ProductType::find($formData["product_type"]);

        $product_category = ProductCategory::find($formData["category"]);

        if (!$product_type) {
            return self::sendError("Ce type de produit n'existe pas!!", 404);
        }

        if (!$product_category) {
            return self::sendError("Cette categorie de produit n'existe pas!!", 404);
        }

        ##GESTION DE L'IMAGE
        $prod_img = $request->file('img');
        $prod_img_name = $prod_img->getClientOriginalName();

        $request->file('img')->move("products", $prod_img_name);

        //REFORMATION DU $formData AVANT SON ENREGISTREMENT DANS LA TABLE **STORE PRODUCTS**
        $formData["img"] = asset("products/" . $prod_img_name);
        $formData["owner"] = $user->id;

        $product = Product::create($formData); #ENREGISTREMENT DU PRODUIT DANS LA DB

        return self::sendResponse($product, 'Produit crée avec succès!!');
    }

    static function allProduct()
    {
        $user = request()->user();

        $product =  Product::with(['owner', "category", "type", "stock", "inventory"])->where("owner", $user->id)->orderBy('id', 'desc')->get();

        // $session = GetSession($user->id); #LA SESSTION DANS LAQUELLE LE PRODUIT A ETE CREE
        return self::sendResponse($product, 'Tout les produits récupérés avec succès!!');
    }

    static function _retrieveProduct($id)
    {
        $user = request()->user();
        $product = Product::with(['owner', "category", "type", "stock", "inventory"])->find($id);
        if (!$product) {
            return self::sendError("Ce Product n'existe pas!", 404);
        }
        return self::sendResponse($product, "Produit récupéré avec succès:!!");
    }

    static function _updateProduct($request, $id)
    {
        $user = request()->user();
        // $session = GetSession($user->id); #LA SESSTION DANS LAQUELLE LE PRODUIT A ETE CREE

        $formData = $request->all();
        $product = Product::where(["visible" => 1])->find($id);
        if (!$product) {
            return self::sendError("Ce Product n'existe pas!", 404);
        };

        if ($product->owner != $user->id) {
            return self::sendError("Ce Product ne vous appartient pas!", 404);
        }

        // return $request->file("img");
        if ($request->file("img")) {
            $img = $request->file('img');

            $img_name = $img->getClientOriginalName();
            $request->file('img')->move("products", $img_name);

            //REFORMATION DU $formData AVANT SON ENREGISTREMENT DANS LA TABLE 
            $formData["img"] = asset("products/" . $img_name);
        }

        $product->update($formData);
        return self::sendResponse($product, 'Ce Produit a été modifié avec succès!');
    }

    static function productDelete($id)
    {
        $user = request()->user();
        // $session = GetSession($user->id); #LA SESSTION DANS LAQUELLE LE PRODUIT A ETE CREE

        $product = Product::where(["visible" => 1])->find($id);
        if (!$product) {
            return self::sendError("Ce Produit n'existe pas!", 404);
        };

        if ($product->owner != $user->id) {
            return self::sendError("Ce Product ne vous appartient pas!", 404);
        }

        $product->visible = 0;
        $product->delete_at = now();
        $product->save();
        return self::sendResponse($product, 'Ce Produit a été supprimé avec succès!');
    }

    // static function supplyProduct($request)
    // {

    //     $user = request()->user();
    //     $product_id = $request->get("product_id");
    //     $supply_id = $request->get("supply_id");

    //     $product = StoreProduit::where(["visible" => 1])->find($product_id);
    //     $supply = StoreSupply::where(["visible" => 1])->find($supply_id);

    //     if (!$product) {
    //         return self::sendError("Ce produit n'existe pas", 404);
    //     }

    //     if ($product->owner != $user->id) {
    //         return self::sendError("Ce Product ne vous appartient pas!", 404);
    //     }

    //     if (!$supply) {
    //         return self::sendError("Ce approvisionnement n'existe pas", 404);
    //     }

    //     if ($product->owner != $user->id) {
    //         return self::sendError("Ce approvisionnement ne vous appartient pas!", 404);
    //     }

    //     if ($product->product_type = 2) { #Le produit n'est pas stockable
    //         return self::sendError("Ce produit n'est pas Stockable", 404);
    //     }

    //     #SI LE PRODUIT EST STOCKABLE
    //     #voyons s'il est déjà stocké
    //     if ($product->supplied) {
    //         return self::sendError("Ce produit est déjà stocké", 505);
    //     }
    //     #S'il n'est pas deja stocké, on passe à son stockage
    //     $product->supply = $supply_id;
    //     $product->supplied = true;
    //     $product->save();

    //     return self::sendResponse($product, 'Ce Produit a été stocké avec succès!');
    // }
}
