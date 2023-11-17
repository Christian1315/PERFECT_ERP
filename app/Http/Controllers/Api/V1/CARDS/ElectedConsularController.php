<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use Illuminate\Http\Request;

class ElectedConsularController extends CONSULAR_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
    }

    #AJOUT D'UNE Consular
    function AddConsular(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
        $validator = $this->Consular_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **createConsular** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
        return $this->createConsular($request);
    }

    #GET ALL Consular
    function Consulars(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUTS LES Consular
        return $this->getConsulars();
    }

    #GET AN Consular
    function _RetrieveConsular(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DU Consular
        return $this->retrieveConsular($id);
    }

    #RECUPERER UN Consular
    function _UpdateConsular(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE Consular VIA SON **id**
        return $this->updateConsular($request, $id);
    }

    function DeleteConsular(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS CONSULAR_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->ConsularDelete($id);
    }

    ###___AFFECTER UN ELU CONSULAIRE A UNE ENTREPRISE
    function AffectToCompany(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS CONSULAR_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
        $validator = $this->Affect_to_company_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError($validator->errors(), 404);
        }
        return $this->_affect_to_company($request, $id);
    }

    ###___AFFECTER UN ELU CONSULAIRE A UN POSTE
    function AffectToPoste(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS CONSULAR_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
        $validator = $this->Affect_to_poste_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CONSULAR_HELPER
            return $this->sendError($validator->errors(), 404);
        }
        return $this->_affect_to_poste($request, $id);
    }
}
