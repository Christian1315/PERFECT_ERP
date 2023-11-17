<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Fonction;

class FONCTION_HELPER extends BASE_HELPER
{
    ###____
    static function allFonctions()
    {
        ##__
        $fonctions = Fonction::orderBy("id", "desc")->get();
        ##__
        return self::sendResponse($fonctions, 'Fonctions recupérées avec succès!');
    }

    static function retrieveFonction($id)
    {
        $fonction = Fonction::find($id);
        if (!$fonction) {
            return self::sendError("Cette fonction n'existe!", 404);
        }

        return self::sendResponse($fonction, "Fonction récupérée avec succès:!!");
    }
}
