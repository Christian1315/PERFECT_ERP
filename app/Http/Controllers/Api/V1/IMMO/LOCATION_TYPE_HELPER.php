<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\LocationType;

class LOCATION_TYPE_HELPER extends BASE_HELPER
{
    static function getLocationTypes()
    {
        $types =  LocationType::orderBy("id", "desc")->get();
        return self::sendResponse($types, 'Tout les types de location récupérés avec succès!!');
    }

    static function retrieveLocationType($id)
    {
        $type = LocationType::find($id);
        return self::sendResponse($type, "Type de location récupéré avec succès!!");
    }
}
