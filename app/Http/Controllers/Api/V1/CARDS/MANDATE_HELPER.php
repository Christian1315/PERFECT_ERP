<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Mandate;
use Illuminate\Support\Facades\Validator;

class MANDATE_HELPER extends BASE_HELPER
{
    ##======== MANDATE VALIDATION =======##
    static function mandate_rules(): array
    {
        return [
            'code' => ['required'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'designation' => ["required"],
        ];
    }

    static function mandate_messages(): array
    {
        return [
            'code.required' => 'Le code de la mandature est réquise!',
            'designation.required' => 'La designation est réquise!',

            'start_date.required' => 'Veuillez préciser la date de début!',
            'end_date.required' => "Veuillez préciser la date de fin",

            'end_date.date' => "Ce champ doit être de format date",
            'start_date.date' => "Ce champ doit être de format date",
        ];
    }

    static function Mandate_Validator($formDatas)
    {
        $rules = self::mandate_rules();
        $messages = self::mandate_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###_____

    static function createMandate($request)
    {
        $formData = $request->all();
        $user = request()->user();
        ##__
        $formData["owner"] = $user->id;
        $mandate = Mandate::create($formData);

        ##__
        return self::sendResponse($mandate, 'Mandature ajoutée avec succès!');
    }

    static function getMandates()
    {
        $user = request()->user();
        $mandates = [];
        if ($user->is_super_admin) {
            $mandates =  Mandate::with(["owner"])->orderBy("id", "desc")->get();
        } else {
            $mandates =  Mandate::with(["owner"])->where(["owner" => $user->id, "visible" => 1])->orderBy("id", "desc")->get();
        }
        return self::sendResponse($mandates, 'Toutes les mandatures récupérées avec succès!!');
    }

    static function retrieveMandate($id)
    {
        $user = request()->user();
        $mandates = null;
        if ($user->is_super_admin) {
            $mandates = Mandate::with(["owner"])->find($id);
        } else {
            $mandates = Mandate::with(["owner"])->where(["owner" => $user->id, "visible" => 1])->find($id);
        }

        return self::sendResponse($mandates, "Mandature récupérée avec succès:!!");
    }

    static function updateMandate($request, $id)
    {
        $formData = $request->all();
        $user = request()->user();

        $mandate = Mandate::where(["visible" => 1])->find($id);

        if (!$mandate) {
            return self::sendError("Cette mandature n'existe pas!", 404);
        }

        if ($mandate->owner != $user->id) {
            return self::sendError("Cette mandature ne vous appartient pas!", 404);
        }

        $mandate->update($formData);
        return self::sendResponse($mandate, "Mandature modifiée avec succès:!!");
    }

    static function mandateDelete($id)
    {
        $user = request()->user();
        $mandate = Mandate::where(["visible" => 1])->find($id);

        if (!$mandate) {
            return self::sendError("Cette mandature n'existe pas!", 404);
        }

        if ($mandate->owner != $user->id) {
            return self::sendError("Cette mandature ne vous appartient pas!", 404);
        }

        ###____
        $mandate->visible = 0;
        $mandate->deleted_at = now();
        $mandate->save();
        return self::sendResponse($mandate, 'Cette mandature a été supprimée avec succès!');
    }
}
