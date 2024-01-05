<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\City;
use App\Models\Country;
use App\Models\Departement;
use App\Models\HouseType;
use App\Models\Proprietor;
use App\Models\Quarter;
use App\Models\Room;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Support\Facades\Validator;

class ROOM_HELPER extends BASE_HELPER
{
    ##======== ROOM VALIDATION =======##

    static function room_rules(): array
    {
        return [
            'name' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'comments' => ['required'],

            'proprietor' => ['required', "integer"],
            'type' => ['required', "integer"],
            'city' => ['required', "integer"],
            'country' => ['required', "integer"],
            'departement' => ['required', "integer"],
            'quartier' => ['required', "integer"],
            'zone' => ['required', "integer"],
            'supervisor' => ['required', "integer"],
        ];
    }

    static function room_messages(): array
    {
        return [
            'name.required' => 'Le nom de la chambre est réquis!',
            'latitude.required' => "Latitude est réquise!",
            'longitude.required' => "La longitude est réquise!",
            'comments.required' => "Le commentaire est réquis!",
            'proprietor.required' => "Le propriétaire est réquis",
            'type.required' => "Le type de la chambre est réquis",
            'city.required' => "La ville est réquise",
            'country.required' => "La Pays est réquis",
            'departement.required' => "Le departement est réquis",
            'quartier.required' => "Le quartier est réquis",
            'zone.required' => "La zone est réquise",
            'supervisor.required' => "Le superviseur est réquis",

            'proprietor.integer' => 'Ce champ doit être de type entier!',
            'type.integer' => 'Ce champ doit être de type entier!',
            'city.integer' => 'Ce champ doit être de type entier!',
            'country.integer' => 'Ce champ doit être de type entier!',
            'departement.integer' => 'Ce champ doit être de type entier!',
            'quartier.integer' => 'Ce champ doit être de type entier!',
            'zone.integer' => 'Ce champ doit être de type entier!',
            'supervisor.integer' => 'Ce champ doit être de type entier!',
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

        ###___TRAITEMENT DES DATAS
        $proprietor = Proprietor::find($formData["proprietor"]);
        $type = HouseType::find($formData["type"]);
        $city = City::find($formData["city"]);
        $country = Country::find($formData["country"]);
        $departement = Departement::find($formData["departement"]);
        $quartier = Quarter::find($formData["quartier"]);
        $zone = Zone::find($formData["zone"]);
        $supervisor = User::find($formData["supervisor"]);


        if (!$proprietor) {
            return self::sendError("Ce Propriétaire n'existe pas!", 404);
        }

        if (!$type) {
            return self::sendError("Ce Type de chambre n'existe pas!", 404);
        }

        if (!$city) {
            return self::sendError("Cette ville n'existe pas!", 404);
        }

        if (!$country) {
            return self::sendError("Ce pays n'existe pas!", 404);
        }

        if (!$departement) {
            return self::sendError("Ce departement n'existe pas!", 404);
        }

        if (!$quartier) {
            return self::sendError("Ce quartier n'existe pas!", 404);
        }

        if (!$zone) {
            return self::sendError("Cette zone n'existe pas!", 404);
        }

        if (!$supervisor) {
            return self::sendError("Cette zone n'existe pas!", 404);
        }


        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $room = Room::create($formData);

        return self::sendResponse($room, "Chambre ajoutée avec succès!!");
    }

    static function getRooms()
    {
        $user = request()->user();
        $rooms = Room::all();
        return self::sendResponse($rooms, 'Toutes les chambres récupérées avec succès!!');
    }

    static function _retrieveRoom($id)
    {
        $user = request()->user();
        $room = Room::find($id);
        if (!$room) {
            return self::sendError("Cette chambre n'existe pas!", 404);
        }
        return self::sendResponse($room, "Chmabre récupérée avec succès:!!");
    }

    static function _updateRoom($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $room = Room::find($id);
        if (!$room) {
            return self::sendError("Cette Chambre n'existe pas!", 404);
        };

        if ($room->owner != $user->id) {
            return self::sendError("Cette Chambre ne vous appartient pas!", 404);
        }

        $room->update($formData);
        return self::sendResponse($room, 'Cette Chambre a été modifiée avec succès!');
    }

    static function roomDelete($id)
    {
        $user = request()->user();
        $room = Room::where(["visible" => 1])->find($id);
        if (!$room) {
            return self::sendError("Cette Carte n'existe pas!", 404);
        };

        if ($room->owner != $user->id) {
            return self::sendError("Cette Carte ne vous appartient pas!", 404);
        }

        $room->visible = 0;
        $room->delete_at = now();
        $room->save();
        return self::sendResponse($room, 'Cette Chambre a été supprimée avec succès!');
    }
}
