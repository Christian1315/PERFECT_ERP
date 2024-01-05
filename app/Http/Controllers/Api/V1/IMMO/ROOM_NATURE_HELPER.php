<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\RoomNature;

class ROOM_NATURE_HELPER extends BASE_HELPER
{
    static function getRoomNature()
    {
        $natures =  RoomNature::orderBy("id", "desc")->get();
        return self::sendResponse($natures, 'Toutes les natures de chambre récupérés avec succès!!');
    }

    static function retrieveRoomNature($id)
    {
        $nature = RoomNature::find($id);
        return self::sendResponse($nature, "Nature de chambre récupérée avec succès!!");
    }
}
