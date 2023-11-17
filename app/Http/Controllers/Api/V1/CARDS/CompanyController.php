<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use Illuminate\Http\Request;

class CompanyController extends COMPANY_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
    }

    #AJOUT D'UNE COMPANY
    function AddCompany(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
        $validator = $this->Company_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **createCompany** DE LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
        return $this->createCompany($request);
    }

    #GET ALL COMPANY
    function Companies(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUTS LES COMPANY
        return $this->getCompanies();
    }

    #GET AN COMPANY
    function _RetrieveCompany(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DU COMPANY
        return $this->retrieveCompany($id);
    }

    #RECUPERER UN COMPANY
    function _UpdateCompany(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR COMPANY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE company VIA SON **id**
        return $this->updateCompany($request, $id);
    }

    function DeleteCompany(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS COMPANY_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->companyDelete($id);
    }
}
