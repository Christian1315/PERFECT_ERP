<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\City;
use App\Models\HouseType;

class HOUSE_TYPE_HELPER extends BASE_HELPER
{
    static function getHouseType()
    {
        $types =  HouseType::orderBy("id", "desc")->get();
        return self::sendResponse($types, 'Tout les types de maison récupérées avec succès!!');
    }

    static function retrieveHouseType($id)
    {
        $type = HouseType::find($id);
        return self::sendResponse($type, "Type de maison récupéré avec succès!!");
    }
}
