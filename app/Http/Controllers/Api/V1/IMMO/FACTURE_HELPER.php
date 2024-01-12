<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\City;
use App\Models\Country;
use App\Models\Departement;
use App\Models\Facture;
use App\Models\FactureType;
use App\Models\House;
use App\Models\HouseType;
use App\Models\Location;
use App\Models\Proprietor;
use App\Models\Quarter;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Support\Facades\Validator;

class FACTURE_HELPER extends BASE_HELPER
{
    ##======== FACTURE VALIDATION =======##

    static function facture_rules(): array
    {
        return [
            'location' => ['required', "integer"],
            'amount' => ['required', "numeric"],
            'begin_date' => ['required', "date"],
            'end_date' => ['required', "date"],
        ];
    }

    static function facture_messages(): array
    {
        return [
            'location.required' => 'La location est requise!',
            'location.integer' => 'Le champ location doit être de type integer!',

            'amount.required' => "Le montant de la facture est réquis!",
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

    static function Facture_Validator($formDatas)
    {
        $rules = self::facture_rules();
        $messages = self::facture_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addFacture($request)
    {
        $formData = $request->all();
        $user = request()->user();
        ###___TRAITEMENT DES DATAS
        $location = Location::where(["visible" => 1])->find($formData["location"]);

        if (!$location) {
            return self::sendError("Cette location n'existe pas!", 404);
        }

        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $formData["owner"] = $user->id;
        $house = House::create($formData);

        return self::sendResponse($house, "Maison ajoutée avec succès!!");
    }

    static function getHouses()
    {
        $user = request()->user();
        $houses = House::where(["visible" => 1])->with(["Owner", "Proprietor", "Type", "Supervisor", "City", "Country", "Departement", "Quartier", "Zone", "Rooms"])->get();
        return self::sendResponse($houses, 'Toutes les maisons récupérées avec succès!!');
    }

    static function _retrieveHouse($id)
    {
        $user = request()->user();
        $house = House::where(["visible" => 1])->with(["Owner", "Proprietor", "Type", "Supervisor", "City", "Country", "Departement", "Quartier", "Zone", "Rooms"])->find($id);
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
