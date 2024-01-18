<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\HomeStopState;
use App\Models\House;
use Illuminate\Support\Facades\Validator;

class HOUSE_STOP_STATE_HELPER extends BASE_HELPER
{
    ##======== HOUSE STOP STATE VALIDATION =======##

    static function stop_state_rules(): array
    {
        return [
            'house' => ['required', "integer"],
        ];
    }

    static function stop_state_messages(): array
    {
        return [
            'house.required' => 'La maison est réquise!',
            'house.integer' => "Ce champ doit être de type entier!",
        ];
    }

    static function House_Stop_State_Validator($formDatas)
    {
        $rules = self::stop_state_rules();
        $messages = self::stop_state_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###___
    static function stopStatsOfHouse($request)
    {
        $user = request()->user();
        $formData = $request->all();
        $house = House::with(["Locations"])->where(["visible" => 1])->find($formData["house"]);
        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        };

        ###_____VERIFIONS D'ABORD SI CETTE HOUSE DISPOSAIT DEJA D'UN ETAT
        $this_house_state = HomeStopState::orderBy("id", "desc")->where(["house" => $formData["house"]])->get();

        if (count($this_house_state) == 0) { ##Si cette maison ne dispose pas d'arrêt d'etat
            ##__ON CREE SON PREMIER ARRET D'ETAT
            $data["owner"] = $user->id;
            $data["house"] = $formData["house"];
            $data["stats_stoped_day"] = now();
            HomeStopState::create($data);
        } else { ##S'il dispose d'un arret d'etat déjà
            $this_house_state = $this_house_state[0];
            ##__On verifie si la date d'aujourd'hui atteint ou depasse
            ##__la date de l'arret precedent + 20 jours
            $precedent_arret_date = strtotime($this_house_state->stats_stoped_day);
            $now = strtotime(now());
            $twenty_days = 20 * 24 * 3600;

            if ($now < ($precedent_arret_date + $twenty_days)) {
                return self::sendError("La précedente date d'arrêt des états de cette maison ne depasse pas encore 2O jours! Vous ne pouvez donc pas éffectuer un nouveau arrêt d'etats pour cette chambre pour le moment", 505);
            }

            ###__ON ARRËTE LES ETATS
            $data["owner"] = $user->id;
            $data["house"] = $formData["house"];
            $data["stats_stoped_day"] = now();
            HomeStopState::create($data);
        }

        return self::sendResponse($house, 'L\'état de cette maison a été arrêté avec succès!');
    }

    function _retrieveHouseStates($request, $houseId)
    {
        $house = House::where(["visible" => 1])->find($houseId);
        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 505);
        }

        $states = HomeStopState::with(["Owner", "House"])->where(["house" => $houseId])->get();
        return self::sendResponse($states, "Tout les états de la maison " . $house->name . " récupérés avec succès!");
    }

    function _retrieveState($request, $id)
    {
        $state = HomeStopState::with(["Owner", "House"])->find($id);
        return self::sendResponse($state, "Etat  récupérés avec succès!");
    }

    function _getAllStates($request)
    {
        $states = HomeStopState::orderBy("id", "desc")->with(["Owner", "House"])->get();
        return self::sendResponse($states, "Tout les etats récupérés avec succès!");
    }
}
