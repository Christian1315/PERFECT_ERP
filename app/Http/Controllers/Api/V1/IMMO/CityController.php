<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use Illuminate\Http\Request;

class CityController extends CITY_HELPER
{

    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
        set_time_limit(0);
    }


    #GET ALL CITY
    function Cities(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR Card_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };
        #RECUPERATION DE TOUTES LES VILLES
        return $this->getCities();
    }

    #GET A CITY
    function _RetrieveCity(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR Card_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE VILLE
        return $this->retrieveCity($id);
    }
}
