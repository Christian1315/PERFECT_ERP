<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\AccountSold;
use App\Models\Facture;
use App\Models\HomeStopState;
use App\Models\House;
use App\Models\ImmoAccount;
use App\Models\Location;
use App\Models\PaiementModule;
use App\Models\PaiementStatus;
use App\Models\PaiementType;
use App\Models\Payement;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PAIEMENT_HELPER extends BASE_HELPER
{
    ##======== PAIEMENT VALIDATION =======##
    static function paiement_rules(): array
    {
        return [
            'location' => ['required', "integer"],
            'module' => ['required', "integer"],
            'status' => ['required', "integer"],
            'type' => ['required', "integer"],

            'amount' => ['required', "numeric"],
            'reference' => ['required'],
            'comments' => ['required'],
            'facture' => ['required', "file"],

            'start_date' => ['required', "date"],
            'end_date' => ['required', "date"],
        ];
    }

    static function paiement_messages(): array
    {
        return [
            'location.required' => 'La location  est réquise!',
            'module.required' => "Le module de paiement est réquis!",
            'status.required' => "Le status de paiement est réquis!",
            'type.required' => "Le type de paiement est réquis!",

            'amount.required' => "Le montant est réquis",
            'comments.required' => "Le commentaire est réquise",

            'start_date.required' => "La date de début est réquise",
            'end_date.required' => "La date de fin est réquise",

            'facture.required' => "La facture du paiement est réquise",
            'facture.file' => "La facture du paiement doit être un fichier",

            'location.integer' => "Ce champ doit être de type entier!",
            'module.integer' => "Ce champ doit être de type entier!",
            'status.integer' => "Ce champ doit être de type entier!",
            'type.integer' => "Ce champ doit être de type entier!",

            'reference.required' => "La reference est réquise!",

            'amount.numeric' => "Ce champ doit être de type numéric!",

            'start_date.date' => "Ce champ doit être de type date!",
            'end_date.date' => "Ce champ doit être de type date!",
        ];
    }

    static function Paiement_Validator($formDatas)
    {
        $rules = self::paiement_rules();
        $messages = self::paiement_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ##======== FILTRAGE DES PAIEMENTS  =======##
    static function filtre_rules(): array
    {
        return [
            'start_date' => ['required', "date"],
            'end_date' => ['required', "date"],
        ];
    }

    static function filtre_messages(): array
    {
        return [
            'start_date.required' => "La date de début est réquise",
            'end_date.required' => "La date de fin est réquise",

            'start_date.date' => "Ce champ doit être de type date!",
            'end_date.date' => "Ce champ doit être de type date!",
        ];
    }

    static function Filtre_Validator($formDatas)
    {
        $rules = self::filtre_rules();
        $messages = self::filtre_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function addPaiement($request)
    {
        $formData = $request->all();
        $user = request()->user();

        ###___TRAITEMENT DES DATAS
        $location = Location::with(["House", "Locataire", "Room"])->find($formData["location"]);
        $module = PaiementModule::find($formData["module"]);
        $status = PaiementStatus::find($formData["status"]);
        $type = PaiementType::find($formData["type"]);

        if (!$location) {
            return self::sendError("Cette location n'existe pas!", 404);
        }
        if (!$module) {
            return self::sendError("Ce Module de paiement n'existe pas!", 404);
        }
        if (!$status) {
            return self::sendError("Ce status de paiement n'existe pas!", 404);
        }
        if (!$type) {
            return self::sendError("Ce type de paiement n'existe pas!", 404);
        }

        ###__ENREGISTREMENT DU PAIEMENT DANS LA DB
        $formData["owner"] = $user->id;
        $Paiement = Payement::create($formData);

        ###__ENREGISTREMENT DE LA FACTURE DE PAIEMENT DANS LA DB
        #~~Traitement de la factrure~~#
        $factureFile = $formData["facture"];
        $fileName = $factureFile->getClientOriginalName();
        $factureFile->move("factures", $fileName);
        $formData["facture"] = asset("factures/" . $fileName);
        ##___

        $factureDatas = [
            "owner" => $user->id,
            "payement" => $Paiement->id,
            "location" => $formData["location"],
            "type" => 1,
            "facture" => $formData["facture"],
            "begin_date" => $formData["start_date"],
            "end_date" => $formData["end_date"],
            "comments" => $formData["comments"],
            "amount" => $formData["amount"],
        ];
        Facture::create($factureDatas);
        ###_____


        ####__ACTUALISATION DE LA LOCATION
        $location->latest_loyer_date = now();
        $location->save();
        ##___

        ###___INCREMENTATION DU COMPTE LOYER

        // return $location;
        $rent_account = ImmoAccount::find(6);
        $request["description"] = "Encaissement de paiement à la date " . $Paiement->created_at . " par le locataire (" . $location->Locataire->name . " " . $location->Locataire->prenom . " ) habitant la chambre (" . $location->Room->number . ") de la maison (" . $location->House->name." )";
        $request["sold"] = $formData["amount"];
        MANAGE_ACCOUNT_HELPER::creditateAccount($request, $rent_account->id);

        return self::sendResponse($Paiement, "Paiement ajouté avec succès!!");
    }

    static function getPaiements()
    {
        $user = request()->user();
        $Paiements = Payement::with(["Owner", "Module", "Type", "Client", "Status", "Location", "Facture"])->get();
        return self::sendResponse($Paiements, 'Tout les paiements récupérés avec succès!!');
    }

    static function _retrievePaiement($id)
    {
        $user = request()->user();
        $Paiement = Payement::with(["Owner", "Module", "Type", "Client", "Status", "Location", "Facture"])->find($id);
        if (!$Paiement) {
            return self::sendError("Ce paiement n'existe pas!", 404);
        }
        return self::sendResponse($Paiement, "Paiement récupéré avec succès:!!");
    }

    static function _updatePaiement($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $Paiement = Payement::find($id);
        if (!$Paiement) {
            return self::sendError("Paiement n'existe pas!", 404);
        };

        ####____TRAITEMENT DU TYPE DE PAIEMENT
        if ($request->get("type")) {
            $type = PaiementType::find($request->get("type"));
            if (!$type) {
                return self::sendError("Ce type de paiement n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU MODULE DE PROPRIETAIRE
        if ($request->get("module")) {
            $module = PaiementModule::find($request->get("module"));

            if (!$module) {
                return self::sendError("Ce module de paiement n'existe pas!", 404);
            }
        }

        ####____TRAITEMENT DU CLIENT
        if ($request->get("client")) {
            $client = User::find($request->get("client"));

            if (!$client) {
                return self::sendError("Ce client n'existe pas!", 404);
            }
        }

        $Paiement->update($formData);
        return self::sendResponse($Paiement, 'Ce paiement a été modifié avec succès!');
    }

    static function filtreByDate($request)
    {
        $user = request()->user();
        $formData = $request->all();

        $start_date = $formData["start_date"];
        $end_date = $formData["end_date"];

        $payements = Payement::with(["Status", "Location", "Facture"])->whereBetween('created_at', [$start_date, $end_date])->get();

        return self::sendResponse($payements, 'Rapport de paiement éffectué avec succès!');
    }

    static function _filtreAfterStateDateStoped($request, $houseId)
    {
        $user = request()->user();
        $formData = $request->all();
        $house = House::with(["Locations", "Rooms"])->where(["visible" => 1])->find($houseId);

        if (!$house) {
            return self::sendError("Cette maison n'existe pas", 404);
        }

        ###___DERNIERE DATE D'ARRET DES ETATS DE CETTE MAISON
        $state_stop_date_of_this_house = HomeStopState::orderBy("id", "desc")->where(["house" => $houseId])->get();
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

        $locationsFiltered["beforeStopDate"] = $locations_that_paid_before_state_stoped_day;
        $locationsFiltered["afterStopDate"] = $locations_that_paid_after_state_stoped_day;
        return self::sendResponse($locationsFiltered, 'Rapport éffectué avec succès!');
    }
}
