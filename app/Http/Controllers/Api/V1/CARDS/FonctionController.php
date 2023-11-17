<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use Illuminate\Http\Request;

class FonctionController extends FONCTION_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
    }

    function Fonctions(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR FONCTION_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->allFonctions();
    }

    function _RetrieveFonction(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR FONCTION_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->retrieveFonction($id);
    }
}
