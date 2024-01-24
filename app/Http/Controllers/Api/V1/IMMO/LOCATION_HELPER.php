<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\HomeStopState;
use App\Models\House;
use App\Models\Locataire;
use App\Models\Location;
use App\Models\LocationStatus;
use App\Models\LocationType;
use App\Models\Payement;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;
use PDF;

class LOCATION_HELPER extends BASE_HELPER
{
    ##======== LOCATION VALIDATION =======##
    static function location_rules(): array
    {
        return [
            'house' => ['required', "integer"],
            'room' => ['required', "integer"],
            'locataire' => ['required', "integer"],
            'type' => ['required', "integer"],

            // 'caution_bordereau' => ["file"],
            // 'loyer' => ['required', "numeric"],
            'water_counter' => ['required', "numeric"],
            // 'electric_counter' => ['required', "numeric"],
            'caution_number' => ['required', 'integer'],

            'prestation' => ['required', "numeric"],
            'numero_contrat' => ['required'],

            'comments' => ['required'],
            // 'img_contrat' => ["file"],
            // 'caution_water' => ['required', "numeric"],
            'echeance_date' => ['required', "date"],
            'latest_loyer_date' => ['required', "date"],
            // 'img_prestation' => ["file"],
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

            'locataire.required' => "Le location est réquis!",
            'locataire.integer' => 'Ce champ doit être de type integer',

            'type.required' => "Le type de location est réquis!",
            'type.integer' => 'Ce champ doit être de type integer',

            // 'caution_bordereau.required' => "Le bordereau de la caution est réquise!",
            'caution_bordereau.file' => "Le bordereau de la caution doit être un fichier!",

            // 'loyer.required' => "Le loyer de la location est réquise!",
            // 'loyer.numeric' => "Ce champ doit être de type numeric!",

            'caution_number.required' => "Le nombre de caution est réquise!",
            'caution_number.integer' => "Le nombre de caution doit être de type integer!",

            'water_counter.required' => "Le compteur d'eau est réquis",
            'water_counter.numeric' => "Le champ compteur d'eau doit être de caractère numérique",


            'prestation.required' => "La prestation est réquise",
            'prestation.file' => "La prestation doit être un fichier",

            'numero_contrat.required' => "Le numéro du contrat est réquis!",
            'comments.required' => "Le commentaire est réquis",

            'img_contrat.required' => "L'image du contrat est réquise",
            'img_contrat.file' => "L'image du contrat doit être un fichier",

            // 'caution_water.required' => "La caution d'eau est réquise",
            // 'caution_water.numeric' => "La caution d'eau doit être de caractère numérique",

            'echeance_date.required' => "La date d'écheance est réquise!",
            'echeance_date.date' => "Ce champ doit être de type date",

            'latest_loyer_date.required' => "La date du dernier loyer est réquis!",
            'latest_loyer_date.date' => "Ce champ doit être de type date",

            // 'electric_counter.required' => "Le compteur éléctrique est réquis!",
            // 'electric_counter.numeric' => "Le champ compteur d'électricité doit être de caractère numérique",

            'echeance_date.required' => "L'adresse est réquis!",
            'echeance_date.date' => "Ce champ doit être de type date",

            // 'img_prestation.required' => "L'image de la prestation est réquise",
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

    ##======== DEMENAGEMENT VALIDATION =======##
    static function demenagement_rules(): array
    {
        return [
            'move_comments' => ['required'],
        ];
    }

    static function demenagement_messages(): array
    {
        return [
            'move_comments.required' => "Veuillez préciser la raison de demenagement de cette location!",
        ];
    }

    static function Demenagement_Validator($formDatas)
    {
        $rules = self::demenagement_rules();
        $messages = self::demenagement_messages();

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
        $locataire = Locataire::find($formData["locataire"]);
        $type = LocationType::find($formData["type"]);

        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        }

        if (!$room) {
            return self::sendError("Cette chambre n'existe pas!", 404);
        }

        if (!$locataire) {
            return self::sendError("Ce locataire n'existe pas!", 404);
        }

        if (!$type) {
            return self::sendError("Ce type de location n'existe pas!", 404);
        }

        ##___TRAITEMENT DES IMAGES
        if ($request->file("caution_bordereau")) {
            # code...
            $caution_bordereau = $request->file("caution_bordereau");
            $caution_bordereauName = $caution_bordereau->getClientOriginalName();
            $caution_bordereau->move("caution_bordereaus", $caution_bordereauName);
            $formData["caution_bordereau"] = asset("caution_bordereaus/" . $caution_bordereauName);
        }

        if ($request->file("img_contrat")) {
            $img_contrat = $request->file("img_contrat");
            $img_contratName = $img_contrat->getClientOriginalName();
            $img_contrat->move("img_contrats", $img_contratName);
            $formData["img_contrat"] = asset("img_contrats/" . $img_contratName);
        }

        if ($request->file("img_prestation")) {
            $img_prestation = $request->file("img_prestation");
            $img_prestationName = $img_contrat->getClientOriginalName();
            $img_prestation->move("img_prestations", $img_prestationName);
            $formData["img_prestation"] = asset("img_prestations/" . $img_prestationName);
        }

        #ENREGISTREMENT DU LOCATION DANS LA DB
        $formData["owner"] = $user->id;
        // $formData["total_amount"] = $formData["loyer"] + $formData["electric_counter"] + $formData["water_counter"];

        $formData["loyer"] = $room->total_amount;
        $location = Location::create($formData);
        return self::sendResponse($location, "Location ajoutée avec succès!!");
    }

    static function getLocations()
    {
        $user = request()->user();
        $locations = Location::where(["visible" => 1])->with(["Owner", "House", "Locataire", "Type", "Room", "Status", "Factures"])->get();
        return self::sendResponse($locations, 'Toutes les locations récupérés avec succès!!');
    }

    static function _retrieveLocation($id)
    {
        $user = request()->user();
        $location = Location::where(["visible" => 1])->with(["Owner", "House", "Locataire", "Type", "Room", "Status", "Factures"])->find($id);
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

        ####____TRAITEMENT DU STATUS DE LOCATION
        if ($request->get("status")) {
            $status = LocationStatus::find($request->get("status"));
            if (!$status) {
                return self::sendError("Ce status de location n'existe pas!", 404);
            }

            #===SI LE STATUS EST **SUSPEND**=====#
            if ($request->get("status") == 2) {
                if (!$request->get("suspend_comments")) {
                    return self::sendError("Veuillez préciser la raison de suspenssion de cette location!", 404);
                }
                $formData["suspend_date"] = now();
                $formData["suspend_by"] = $user->id;
            }

            #===SI LE STATUS EST **MOVED**=====#
            if ($request->get("status") == 3) {
                if (!$request->get("move_comments")) {
                    return self::sendError("Veuillez préciser la raison de demenagement de cette location!", 404);
                }
                $formData["move_date"] = now();
                $formData["visible"] = 0;
                $formData["delete_at"] = now();
            }
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

    static function locationDemenage($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $location = Location::where(["visible" => 1])->find($id);

        if (!$location) {
            return self::sendError("Cette location n'existe pas!", 404);
        };

        $house = House::find($location->house);

        ###___DERNIERE DATE D'ARRET DES ETATS DE CETTE MAISON
        $state_stop_date_of_this_house = HomeStopState::orderBy("id", "desc")->where(["house" => $location->house])->get();
        if (count($state_stop_date_of_this_house) == 0) {
            return self::sendError("Cette maison ne dispose d'aucune date d'arrêt des états!", 505);
        }

        ###__DATE D'ARRET DES ETATS DE CETTE MAISON
        $state_stop_date_of_this_house = strtotime($state_stop_date_of_this_house[0]->stats_stoped_day);

        ###__LES LOCATIONS DE CETTE MAISON
        $this_house_locations = $house->Locations;

        ###__LES PAIEMENTS LIES A LA LOCATION DE CETTE MAISON
        $locations_that_paid_before_state_stoped_day = [];
        $locations_that_paid_after_state_stoped_day = [];

        foreach ($this_house_locations as $this_house_location) {
            ###__RECUPERONS LES LOCATIONS AYANT PAYES
            $location_payements = Payement::with(["Status", "Location", "Facture"])->where(["location" => $this_house_location->id])->get();

            ##__TRAITEMENT DE LA DATE DE PAIEMENT( puis filtrer les locations avant et après paiement)
            foreach ($location_payements as $location_payement) {
                $location_payement_date = strtotime($location_payement->created_at);

                if ($location_payement_date < $state_stop_date_of_this_house) {
                    array_push($locations_that_paid_before_state_stoped_day, $this_house_location);
                } else {
                    array_push($locations_that_paid_after_state_stoped_day, $this_house_location);
                }
            }
        };

        ###___Verifions si ce locataire fait parti des locataires qui ont payé
        ###___après arret des etats

        $result = false;
        foreach ($locations_that_paid_after_state_stoped_day as $locations_that_paid_after_state_stoped_day_) {
            if ($locations_that_paid_after_state_stoped_day_->locataire == $location->locataire) {
                $result = true;
            }
        }

        if ($result) {
            return self::sendError("Ce locataire a effectué des paiements après l'arrêt des états! Vous ne pouvez pas le démenager!", 505);
        }

        $formData["move_date"] = now();
        $formData["visible"] = 0;
        $formData["delete_at"] = now();

        $location->update($formData);
        return self::sendResponse($location, 'Cette location a été demenagée avec succès!');
    }

    function manageCautions($request)
    {
        $locations = Location::with(["Owner", "House", "Locataire", "Type", "Status", "Room"])->get();

        // return "gogo";
        ###___GESTION DES  FACTURES & TICKETS
        $pdf = PDF::loadView('cautions', compact("locations"));

        $reference = Custom_Timestamp();
        $pdf->save(public_path("cautions/" . $reference . ".pdf"));
        $cautionpdf_path = asset("cautions/" . $reference . ".pdf");

        $data["cautionpdf_path"] = $cautionpdf_path;
        return self::sendResponse($data, "Cautions generées en pdf avec succès!");
    }
}
