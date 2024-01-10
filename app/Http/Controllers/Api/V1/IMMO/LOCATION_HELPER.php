<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\CardType;
use App\Models\Country;
use App\Models\Departement;
use App\Models\House;
use App\Models\Locataire;
use App\Models\Location;
use App\Models\LocationType;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;

class LOCATION_HELPER extends BASE_HELPER
{
    ##======== LOCATION VALIDATION =======##
    static function location_rules(): array
    {
        return [
            'house' => ['required', "integer"],
            'room' => ['required', "integer"],
            'location' => ['required', "integer"],
            'type' => ['required', "integer"],

            'caution_bordereau' => ['required', "file"],
            'loyer' => ['required', "numeric"],
            'water_counter' => ['required'],
            'water_counter' => ['required'],
            'prestation' => ['required', "numeric"],
            'numero_contrat' => ['required'],

            'comments' => ['required'],
            'img_contrat' => ['required', "file"],
            'caution_water' => ['required', "numeric"],
            'echeance_date' => ['required', "date"],
            'latest_loyer_date' => ['required', "date"],
            'electric_counter' => ['required'],
            'img_prestation' => ['required', "file"],
            'caution_electric' => ['required', "numeric"],
            'integration_date' => ['required', "date"],
        ];
    }

    static function location_messages(): array
    {
        return [
            'house.required' => 'La maison est réquise!',
            'house.integer' => 'Ce champ doit être de type integer',

            'room.required' => "Le chambre est réquise!",
            'room.integer' => 'Ce champ doit être de type integer',

            'location.required' => "Le location est réquis!",
            'location.integer' => 'Ce champ doit être de type integer',

            'type.required' => "Le type de location est réquis!",
            'type.integer' => 'Ce champ doit être de type integer',

            'caution_bordereau.required' => "Le bordereau de la caution est réquise!",
            'caution_bordereau.file' => "Le bordereau de la caution doit être un fichier!",

            'loyer.required' => "Le loyer de la location est réquise!",
            'loyer.numeric' => "Ce champ doit être de type numeric!",

            'water_counter.required' => "Le compteur d'eau est réquis",

            'prestation.required' => "La prestation est réquise",
            'prestation.file' => "La prestation doit être un fichier",

            'numero_contrat.required' => "Le numéro du contrat est réquis!",
            'comments.required' => "Le commentaire est réquis",

            'img_contrat.required' => "L'image du contrat est réquise",
            'img_contrat.file' => "L'image du contrat doit être un fichier",

            'caution_water.required' => "La caution d'eau est réquise",
            'caution_water.numeric' => "La caution d'eau doit être de caractère numérique",

            'echeance_date.required' => "L'adresse est réquis!",
            'echeance_date.date' => "Ce champ doit être de type date",

            'latest_loyer_date.required' => "La date du dernier loyer est réquis!",
            'latest_loyer_date.date' => "Ce champ doit être de type date",

            'electric_counter.required' => "Le compteur éléctrique est réquis!",

            'echeance_date.required' => "L'adresse est réquis!",
            'echeance_date.date' => "Ce champ doit être de type date",

            'img_prestation.required' => "L'image de la prestation est réquise",
            'img_prestation.file' => "L'image de la prestation doit être un fichier",

            'caution_electric.required' => "La caution d'electricité est réquise!",
            'caution_electric.numeric' => 'Le type de la caution d\'electricité doit être de type numéric!',

            'integration_date.required' => "La date d'intégration est réquise!",
            'integration_date.date' => 'Ce champ est de type date',
        ];
    }

    static function Location_Validator($formDatas)
    {
        $rules = self::location_rules();
        $messages = self::location_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addlocation($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###___TRAITEMENT DES DATAS
        $house = House::find($formData["house"]);
        $room = Room::find($formData["room"]);
        $location = location::find($formData["location"]);
        $type = LocationType::find($formData["type"]);


        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        }

        if (!$room) {
            return self::sendError("Cette chambre n'existe pas!", 404);
        }

        if (!$location) {
            return self::sendError("Ce location n'existe pas!", 404);
        }

        if (!$type) {
            return self::sendError("Ce type de location n'existe pas!", 404);
        }

        ##___TRAITEMENT DES IMAGES
        $caution_bordereau = $request->file("caution_bordereau");
        $caution_bordereauName = $caution_bordereau->getClientOriginalName();
        $caution_bordereau->move("caution_bordereaus", $caution_bordereauName);
        $formData["caution_bordereau"] = asset("caution_bordereaus/" . $caution_bordereauName);


        $img_contrat = $request->file("img_contrat");
        $img_contratName = $img_contrat->getClientOriginalName();
        $img_contrat->move("img_contrats", $img_contratName);
        $formData["img_contrat"] = asset("img_contrats/" . $img_contratName);


        $img_prestation = $request->file("img_prestation");
        $img_prestationName = $img_contrat->getClientOriginalName();
        $img_prestation->move("img_prestations", $img_prestationName);
        $formData["img_prestation"] = asset("img_prestations/" . $img_prestationName);


        #ENREGISTREMENT DU location DANS LA DB
        $formData["owner"] = $user->id;

        $location = Location::create($formData);
        return self::sendResponse($location, "Location ajoutée avec succès!!");
    }

    static function getLocations()
    {
        $user = request()->user();
        $locations = Location::where(["visible" => 1])->with(["Owner", "House", "Locataire", "Type", "Room"])->get();
        return self::sendResponse($locations, 'Toutes les locations récupérés avec succès!!');
    }

    static function _retrieveLocation($id)
    {
        $user = request()->user();
        $location = Location::where(["visible" => 1])->with(["Owner", "House", "Locataire", "Type", "Room"])->find($id);
        if (!$location) {
            return self::sendError("Ce location n'existe pas!", 404);
        }
        return self::sendResponse($location, "Location récupérée avec succès:!!");
    }

    static function _updateLocation($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $location = Location::where(["visible" => 1])->find($id);

        if (!$location) {
            return self::sendError("Cette location n'existe pas!", 404);
        };

        if ($location->owner != $user->id) {
            return self::sendError("Cette location ne vous appartient pas!", 404);
        }

        ####____TRAITEMENT DU HOUSE
        if ($request->get("house")) {
            $house = House::find($request->get("house"));

            if (!$house) {
                return self::sendError("Cette maison n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DE LA CHAMBRE
        if ($request->get("room")) {
            $room = Room::find($request->get("room"));

            if (!$room) {
                return self::sendError("Cette chambre n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU LOCATAIRE
        if ($request->get("locataire")) {
            $locataire = Locataire::find($request->get("locataire"));
            if (!$locataire) {
                return self::sendError("Ce locataire n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU TYPE DE LOCATION
        if ($request->get("type")) {
            $type = LocationType::find($request->get("type"));
            if (!$type) {
                return self::sendError("Ce type de location n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU CAUTION BORDEREAU
        if ($request->file("caution_bordereau")) {
            $caution_bordereau = $request->file("caution_bordereau");
            $caution_bordereauName = $caution_bordereau->getClientOriginalName();
            $caution_bordereau->move("caution_bordereaus", $caution_bordereauName);
            $formData["caution_bordereau"] = asset("caution_bordereaus/" . $caution_bordereauName);
        }

        ####____TRAITEMENT DE L'IMAGE DU CONTRAT
        if ($request->file("img_contrat")) {
            $img_contrat = $request->file("img_contrat");
            $img_contratName = $img_contrat->getClientOriginalName();
            $img_contrat->move("img_contrats", $img_contratName);
            $formData["img_contrat"] = asset("img_contrats/" . $img_contratName);
        }


        ####____TRAITEMENT DE L'IMAGE DE LA PRESTATION
        if ($request->file("img_prestation")) {
            $img_prestation = $request->file("img_prestation");
            $img_prestationName = $img_contrat->getClientOriginalName();
            $img_prestation->move("img_prestations", $img_prestationName);
            $formData["img_prestation"] = asset("img_prestations/" . $img_prestationName);
        }

        $location->update($formData);
        return self::sendResponse($location, 'Cette location a été modifiée avec succès!');
    }

    static function locationDelete($id)
    {
        $user = request()->user();
        $location = Location::where(["visible" => 1])->find($id);
        if (!$location) {
            return self::sendError("Cette location n'existe pas!", 404);
        };

        if (!Is_User_An_Admin($user->id)) {
            if ($location->owner != $user->id) {
                return self::sendError("Cette location ne vous appartient pas!", 404);
            }
        }

        $location->visible = 0;
        $location->delete_at = now();
        $location->save();
        return self::sendResponse($location, 'Cette location a été supprimée avec succès!');
    }
}
