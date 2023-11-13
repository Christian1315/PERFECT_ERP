<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class LogistiqueController extends LOGISTIQUE_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
        $this->middleware("ChechSuperAdminOrSimpleAdmin")->only([
            "AddLogistique",
            "_UpdateLogistique",
            "DeleteLogistique",
        ]);
    }

    #AJOUT D'UN Logistique
    function AddLogistique(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
        $validator = $this->Logistique_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **createLogistique** DE LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
        return $this->createLogistique($request);
    }

    #GET ALL Logistique
    function Logistiques(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUT LES Logistique
        return $this->getLogistiques();
    }

    #GET A Logistique
    function _RetrieveLogistique(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DU Logistique
        return $this->retrieveLogistique($id);
    }

    #RECUPERER UN Logistique
    function _UpdateLogistique(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR LOGISTIQUE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UN Logistique VIA SON **id**
        return $this->updateLogistiques($request, $id);
    }

    function DeleteLogistique(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS LOGISTIQUE_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->logistiqueDelete($id);
    }
}
