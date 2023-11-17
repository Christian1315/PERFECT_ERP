<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Poste;
use Illuminate\Support\Facades\Validator;

class POSTE_HELPER extends BASE_HELPER
{
    ##========AFFECT FONCTION VALIDATION =======##
    static function affect_fonction_rules(): array
    {
        return [
            'company_id' => ['required', 'integer'],
            'elected_consular' => ['required', 'integer'],
            'mandate' => ['required', 'integer'],
        ];
    }

    static function affect_fonction_messages(): array
    {
        return [
            'elected_consular.required' => 'Le consulaire doit est requis!',
            'elected_consular.integer' => 'Le consulaire doit être un entier!',

            'mandate.required' => 'La mandature est réquise!',
            'mandate.integer' => 'La mandate doit être un entier!',

            'company_id.required' => "L'entreprise est réquise!",
            'company_id.integer' => "L'entreprise doit être un entier!",
        ];
    }

    static function Affect_fonction_Validator($formDatas)
    {
        $rules = self::affect_fonction_rules();
        $messages = self::affect_fonction_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ###____
    static function allPostes()
    {
        ##__
        $postes = Poste::orderBy("id", "desc")->get();
        ##__
        return self::sendResponse($postes, 'Postes recupérés avec succès!');
    }

    static function retrievePoste($id)
    {
        $poste = Poste::find($id);
        if (!$poste) {
            return self::sendError("Ce Poste n'existe!", 404);
        }

        return self::sendResponse($poste, "Poste récupéré avec succès:!!");
    }
}
