<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ProductStock;

class PRODUCT_STOCK_HELPER extends BASE_HELPER
{
    static function allStock()
    {
        $user = request()->user();
        $stock =  ProductStock::with(['owner', 'manager', "product"])->where("owner", $user->id)->orderBy('id', 'desc')->get();
        return self::sendResponse($stock, 'Tout les stocks récupérés avec succès!!');
    }

    static function _retrieveStock($id)
    {
        $user = request()->user();
        $stock = ProductStock::with(['owner', 'manager', "product"])->find($id);
        if (!$stock) {
            return self::sendError("Ce stock n'existe pas!", 404);
        }
        return self::sendResponse($stock, "Stock récupéré avec succès:!!");
    }
}
