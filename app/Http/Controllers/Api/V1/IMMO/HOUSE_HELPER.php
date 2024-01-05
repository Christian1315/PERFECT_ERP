<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\House;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;

class HOUSE_HELPER extends BASE_HELPER
{
    ##======== HOUSE VALIDATION =======##

    static function house_rules(): array
    {
        return [
            // 'consular' => ['required', "integer"],
            'mandate' => ['required', "integer"],
            'company' => ['required', "integer"],
        ];
    }

    static function house_messages(): array
    {
        return [
            'mandate.required' => 'Veuillez précisez la mandature de l\'elu consulaire!',
            'company.required' => 'Veuillez précisez l\'entreprise de l\'elu consulaire!',

            'mandate.integer' => 'La mandature doit être de type entier!',
            'company.integer' => 'L\'entreprise de l\'elu consulaire doit être de type entier!',
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

        #ENREGISTREMENT DE LA CARTE DANS LA DB
        $house = House::create($formData);

        return self::sendResponse($house, "Maison ajoutée avec succès!!");
    }

    static function getHouse()
    {
        $user = request()->user();
        $houses = House::all();
        return self::sendResponse($houses, 'Toutes les maisons récupérées avec succès!!');
    }

    static function _retrieveHouse($id)
    {
        $user = request()->user();
        $house = House::find($id);
        if (!$house) {
            return self::sendError("Cette maison n'existe pas!", 404);
        }
        return self::sendResponse($house, "Maison récupérée avec succès:!!");
    }

    static function _updateHouse($request, $id)
    {
        $user = request()->user();
        $formData = $request->all();
        $house = Room::find($id);
        if (!$house) {
            return self::sendError("Cette Maison n'existe pas!", 404);
        };

        if ($house->owner != $user->id) {
            return self::sendError("Cette Maison ne vous appartient pas!", 404);
        }

        $house->update($formData);
        return self::sendResponse($house, 'Cette Maison a été modifiée avec succès!');
    }

    static function houseDelete($id)
    {
        $user = request()->user();
        $house = House::where(["visible" => 1])->find($id);
        if (!$house) {
            return self::sendError("Cette house n'existe pas!", 404);
        };

        if ($house->owner != $user->id) {
            return self::sendError("Cette maison ne vous appartient pas!", 404);
        }

        $house->visible = 0;
        $house->delete_at = now();
        $house->save();
        return self::sendResponse($house, 'Cette maison a été supprimée avec succès!');
    }
}
