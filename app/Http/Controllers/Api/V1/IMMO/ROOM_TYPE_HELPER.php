<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\RoomType;

class ROOM_TYPE_HELPER extends BASE_HELPER
{
    static function getRoomType()
    {
        $types =  RoomType::orderBy("id", "desc")->get();
        return self::sendResponse($types, 'Tout les types de chambre récupérés avec succès!!');
    }

    static function retrieveRoomType($id)
    {
        $type = RoomType::find($id);
        return self::sendResponse($type, "Type de chambre récupéré avec succès!!");
    }
}
