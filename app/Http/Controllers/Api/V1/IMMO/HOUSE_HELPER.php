<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\City;
use App\Models\Country;
use App\Models\Departement;
use App\Models\House;
use App\Models\HouseType;
use App\Models\Proprietor;
use App\Models\Quarter;
use App\Models\Room;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Support\Facades\Validator;

class HOUSE_HELPER extends BASE_HELPER
{
    ##======== HOUSE VALIDATION =======##

    static function house_rules(): array
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

    static function house_messages(): array
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

    static function House_Validator($formDatas)
    {
        $rules = self::house_rules();
        $messages = self::house_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addHouse($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###___TRAITEMENT DES DATAS
        $proprietor = Proprietor::where(["visible" => 1])->find($formData["proprietor"]);
        $type = HouseType::find($formData["type"]);
        $city = City::find($formData["city"]);
        $country = Country::find($formData["country"]);
        $departement = Departement::find($formData["departement"]);
        $quartier = Quarter::find($formData["quartier"]);
        $zone = Zone::find($formData["zone"]);
        $user_supervisor = User::find($formData["supervisor"]);

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

        if (!$user_supervisor) {
            return self::sendError("Ce superviseur n'existe pas!", 404);
        }

        ##__VERIFIONS SI LE UER_SUPERVISOR DISPOSE VRAIMENT DU ROLE D'UN SUPERVISEUR
        $user_roles = $user_supervisor->roles; ##recuperation des roles de ce user_supervisor
        $is_this_user_supervisor_has_supervisor_role = false; ##cette variable permet de verifier si user_supervisor dispose vraiment du rôle d'un superviseur

        foreach ($user_roles as $user_role) {
            if ($user_role->id == 3) {
                $is_this_user_supervisor_has_supervisor_role = true;
            }
        }

        if (!$is_this_user_supervisor_has_supervisor_role) {
            return self::sendError("Ce utilisateur choisi comme superviseur ne dispose vraiment pas le rôle d'un superviseur!", 404);
        }

        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $formData["owner"] = $user->id;
        $house = House::create($formData);

        return self::sendResponse($house, "Maison ajoutée avec succès!!");
    }

    static function getHouses()
    {
        $user = request()->user();
        $houses = House::where(["visible" => 1])->with(["Owner", "Proprietor", "Type", "Supervisor", "City", "Country", "Departement", "Quartier", "Zone"])->get();
        return self::sendResponse($houses, 'Toutes les maisons récupérées avec succès!!');
    }

    static function _retrieveHouse($id)
    {
        $user = request()->user();
        $house = House::where(["visible" => 1])->with(["Owner", "Proprietor", "Type", "Supervisor", "City", "Country", "Departement", "Quartier", "Zone"])->find($id);
        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        }
        return self::sendResponse($house, "Maison récupérée avec succès:!!");
    }

    static function _updateHouse($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $house = House::where(["visible" => 1])->find($id);
        if (!$house) {
            return self::sendError("Cette Maison n'existe pas!", 404);
        };

        if ($house->owner != $user->id) {
            return self::sendError("Cette Maison ne vous appartient pas!", 404);
        }

        ####____TRAITEMENT DU PROPRIETAIRE
        if ($request->get("proprietor")) {
            $proprietor = Proprietor::where(["visible" => 1])->find($request->get("proprietor"));

            if (!$proprietor) {
                return self::sendError("Ce Proprietaire n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU TYPE DE PROPRIETAIRE
        if ($request->get("type")) {
            $type = HouseType::find($request->get("type"));

            if (!$type) {
                return self::sendError("Ce type de proprietaire n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU SUPERVISEUR
        if ($request->get("supervisor")) {
            $user_supervisor = User::find($request->get("supervisor"));

            ##__VERIFIONS SI LE UER_SUPERVISOR DISPOSE VRAIMENT DU ROLE D'UN SUPERVISEUR
            $user_roles = $user_supervisor->roles; ##recuperation des roles de ce user_supervisor
            $is_this_user_supervisor_has_supervisor_role = false; ##cette variable permet de verifier si user_supervisor dispose vraiment du rôle d'un superviseur

            foreach ($user_roles as $user_role) {
                if ($user_role->id == 3) {
                    $is_this_user_supervisor_has_supervisor_role = true;
                }
            }

            if (!$is_this_user_supervisor_has_supervisor_role) {
                return self::sendError("Ce utilisateur choisi comme superviseur ne dispose vraiment pas le rôle d'un superviseur!", 404);
            }
        }

        ####____TRAITEMENT DU CITY
        if ($request->get("city")) {
            $city = City::find($request->get("city"));

            if (!$city) {
                return self::sendError("Cette ville n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU COUNTRY
        if ($request->get("country")) {
            $country = Country::find($request->get("country"));

            if (!$country) {
                return self::sendError("Ce pays n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU DEPARTEMENT
        if ($request->get("departement")) {
            $departement = Departement::find($request->get("departement"));

            if (!$departement) {
                return self::sendError("Ce département n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU QUARTIER
        if ($request->get("quartier")) {
            $quartier = Quarter::find($request->get("quartier"));

            if (!$quartier) {
                return self::sendError("Ce quartier n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DE LA ZONE
        if ($request->get("zone")) {
            $zone = Zone::find($request->get("zone"));

            if (!$zone) {
                return self::sendError("Cette zone n'existe pas!", 404);
            }
        }

        $house->update($formData);
        return self::sendResponse($house, 'Cette Maison a été modifiée avec succès!');
    }

    static function houseDelete($id)
    {
        $user = request()->user();
        $house = House::where(["visible" => 1])->find($id);
        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        };

        if (!Is_User_An_Admin($user->id)) {
            if ($house->owner != $user->id) {
                return self::sendError("Cette maison ne vous appartient pas!", 404);
            }
        }

        $house->visible = 0;
        $house->delete_at = now();
        $house->save();
        return self::sendResponse($house, 'Cette maison a été supprimée avec succès!');
    }
}
