<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\House;
use App\Models\Room;
use App\Models\RoomNature;
use App\Models\RoomType;
use Illuminate\Support\Facades\Validator;

class ROOM_HELPER extends BASE_HELPER
{
    ##======== ROOM VALIDATION =======##

    static function room_rules(): array
    {
        return [
            "house" => ["required", "integer"],
            "nature" => ["required", "integer"],
            "type" => ["required", "integer"],
            "loyer" => ["required", "numeric"],
            "number" => ["required"],
            "comments" => ["required"],

            "security" => ["required", "numeric"],
            "rubbish" => ["required", "numeric"],
            "vidange" => ["required", "numeric"],
            "cleaning" => ["required", "numeric"],

            "water_counter" => ["boolean"],
            "water_discounter" => ["boolean"],
            "electric_counter" => ["boolean"],
            "electric_discounter" => ["boolean"],
            "publish" => ["boolean"],
            "home_banner" => ["boolean"],

            // "water_counter_text" => ["required"],
            // "water_discounter_text" => ["required"],
            // "principal_img" => ["required", "file"],
        ];
    }

    static function room_messages(): array
    {
        return [
            "house.required" => "Veuillez préciser la maison!",
            "nature.required" => "Veuillez préciser la nature de la chambre!",
            "type.required" => "Veuillez préciser le type de la chambre!",

            "house.integer" => "Ce champ doit être de type entier!",
            "nature.integer" => "Ce champ doit être de type entier!",
            "type.integer" => "Ce champ doit être de type entier!",

            "loyer.required" => "Ce champs est réquis",
            "loyer.numeric" => "Ce Champ doit être de type numérique!",

            "number.required" => "Ce champ est réquis",
            "comments.required" => "Ce champ est réquis",

            "security.required" => "Ce Champ est réquis!",
            "rubbish.required" => "Ce Champ est réquis!",
            "vidange.required" => "Ce Champ est réquis!",
            "cleaning.required" => "Ce Champ est réquis!",

            "security.numeric" => "Ce Champ doit être de type numérique!",
            "rubbish.numeric" => "Ce Champ doit être de type numérique!",
            "vidange.numeric" => "Ce Champ doit être de type numérique!",
            "cleaning.numeric" => "Ce Champ doit être de type numérique!",

            "publish.required" => "Ce Champ est réquis!",
            "home_banner.boolean" => "Ce Champ est un booléen!",

            // "security.boolean" => "Ce Champ est un booléen!",
            // "rubbish.boolean" => "Ce Champ est un booléen!",
            // "vidange.boolean" => "Ce Champ est un booléen!",
            // "cleaning.boolean" => "Ce Champ est un booléen!",
            "water_counter.boolean" => "Ce Champ est un booléen!",
            "water_discounter.boolean" => "Ce Champ est un booléen!",
            "electric_counter.boolean" => "Ce Champ est un booléen!",
            "electric_discounter.boolean" => "Ce Champ est un booléen!",
            "publish.boolean" => "Ce Champ est un booléen!",
            "home_banner.boolean" => "Ce Champ est un booléen!",

            // "water_counter_text.required" => "Ce Champ est réquis!",
            // "water_discounter_text.required" => "Ce Champ est réquis!",

            // "principal_img.required" => "Ce Champ est réquis!",
            // "principal_img.file" => "Ce Champ doit être un fichier!",
        ];
    }

    static function Room_Validator($formDatas)
    {
        $rules = self::room_rules();
        $messages = self::room_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addRoom($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###____TRAITEMENT DU HOUSE
        $house = House::where(["visible" => 1])->find($formData["house"]);
        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        }

        ###____TRAITEMENT DU HOUSE NATURE
        $nature = RoomNature::find($formData["nature"]);
        if (!$nature) {
            return self::sendError("Cette nature de chambre n'existe pas!", 404);
        }

        ###____TRAITEMENT DU HOUSE TYPE
        $type = RoomType::find($formData["type"]);
        if (!$type) {
            return self::sendError("Ce type de chambre n'existe pas!", 404);
        }

        ###____TRAITEMENT DE L'IMAGE
        if ($request->file("principal_img")) {
            $img = $request->file("principal_img");
            $imgName = $img->getClientOriginalName();
            $img->move("room_images", $imgName);
            $formData["principal_img"] = asset("room_images/" . $imgName);
        }

        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $formData["owner"] = $user->id;
        $formData["total_amount"] = $formData["loyer"] + $formData["security"] + $formData["rubbish"] + $formData["vidange"] + $formData["cleaning"];

        $room = Room::create($formData);
        return self::sendResponse($room, "Chambre ajoutée avec succès!!");
    }

    static function getRooms()
    {
        $user = request()->user();
        $rooms = Room::with(["Owner", "House", "Nature", "Type", "Locations"])->where(["visible" => 1])->get();

        // return $rooms->Locations;
        return self::sendResponse($rooms, 'Toutes les chambres récupérées avec succès!!');
    }

    static function _retrieveRoom($id)
    {
        $user = request()->user();
        $room = Room::where(["visible" => 1])->with(["Owner", "House", "Nature", "Type", "Locations"])->find($id);
        if (!$room) {
            return self::sendError("Cette chambre n'existe pas!", 404);
        }

        $locataires = [];
        $thisRoomLocations =  $room->Locations;

        foreach ($thisRoomLocations as $location) {
            array_push($locataires, $location->Locataire);
        }

        $room["locataires"] = $locataires;
        return self::sendResponse($room, "Chmabre récupérée avec succès:!!");
    }

    static function _updateRoom($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $room = Room::where(["visible" => 1])->find($id);
        if (!$room) {
            return self::sendError("Cette Chambre n'existe pas!", 404);
        };

        if ($room->owner != $user->id) {
            return self::sendError("Cette Chambre ne vous appartient pas!", 404);
        }

        ###____TRAITEMENT DU HOUSE
        if ($request->get("house")) {
            $house = House::where(["visible" => 1])->find($request->get("house"));
            if (!$house) {
                return self::sendError("Cette Chambre n'existe pas!", 404);
            }
        }

        ###____TRAITEMENT DU HOUSE NATURE
        if ($request->get("nature")) {
            $nature = RoomNature::find($request->get("nature"));
            if (!$nature) {
                return self::sendError("Cette nature de chambre n'existe pas!", 404);
            }
        }

        ###____TRAITEMENT DU ROOM TYPE
        if ($request->get("type")) {
            $type = RoomType::find($request->get("type"));
            if (!$type) {
                return self::sendError("Ce type de chambre n'existe pas!", 404);
            }
        }

        ###____TRAITEMENT DE L'IMAGE
        if ($request->file("principal_img")) {
            $img = $request->file("principal_img");
            $imgName = $img->getClientOriginalName();
            $img->move("room_images", $imgName);
            $formData["principal_img"] = asset("room_images/" . $imgName);
        }

        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $room->update($formData);
        return self::sendResponse($room, 'Cette Chambre a été modifiée avec succès!');
    }

    static function roomDelete($id)
    {
        $user = request()->user();
        $room = Room::where(["visible" => 1])->find($id);
        if (!$room) {
            return self::sendError("Cette Chambre n'existe pas!", 404);
        };

        if (!Is_User_An_Admin($user->id)) {
            if ($room->owner != $user->id) {
                return self::sendError("Cette Chambre ne vous appartient pas!", 404);
            }
        }

        $room->visible = 0;
        $room->delete_at = now();
        $room->save();
        return self::sendResponse($room, 'Cette Chambre a été supprimée avec succès!');
    }
}
