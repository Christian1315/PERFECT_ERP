<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class ChargementController extends CHARGEMENT_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
        $this->middleware("CheckIfUserIsAdminOrLogistique")->only([
            "AddChargement",
            "_UpdateChargement",
            "DeleteChargement",
        ]);
    }

    #AJOUT D'UNE Chargement
    function AddChargement(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
        $validator = $this->Chargement_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **createChargement** DE LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
        return $this->createChargement($request);
    }

    #GET ALL Chargement
    function Chargements(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUT LES ChargementS
        return $this->getChargements();
    }

    #GET A Chargement
    function _RetrieveChargement(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };
        #RECUPERATION DU Chargement
        return $this->retrieveChargement($request, $id);
    }

    #RECUPERER UN Chargement
    function _UpdateChargement(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CHARGEMENT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };
        #RECUPERATION D'UN Chargement VIA SON **id**
        return $this->updateChargement($request, $id);
    }

    function DeleteChargement(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS CHARGEMENT_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->ChargementDelete($id);
    }

    ###GENERATION D'UNE LISTE DE CHARGEMENT
    function _GenerateChargementList(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS EXPLOITATION_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
        $validator = $this->Chargement_list_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        return $this->generateChargementList($request);
    }
}
