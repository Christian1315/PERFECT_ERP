<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Exports\CompanyExport;
use App\Imports\ImportCompany;
use App\Models\Company;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanyController extends COMPANY_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access'])->except(["ExportCompanies"]);
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

    ##__IMPORTATION DES ENTREPRISES
    public function ImportCompanies(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        ### VEUILLEZ CHOISIR COMME UN EXEMPLAIE, LE FICHIER EXCEL **companies.xlsx** QUI SE TROUVE DANS LA RACINE DU PROJET
        if (!$request->file('companies')) {
            return $this->sendError("Veuillez charger le fichier excel!", 404);
        }

        $formdata = $request->file('companies');
        $data = Excel::import(new ImportCompany, $formdata);
        $companies = Company::all();

        foreach ($companies as $company) {
            $company_duplicates = Company::where([
                "owner" => request()->user()->id,
                "ifu" => $company->ifu,
                "denomination" => $company->denomination,
                "form_juridique" => $company->form_juridique,
                "principal_activity" => $company->principal_activity,
                "activity_area" => $company->activity_area,
                "creation_date" => $company->creation_date,
                "phone" => $company->phone,
                "email" => $company->email,
                "departement" => $company->departement,
                "adresse" => $company->adresse,
                "rccm" => $company->rccm,
            ])->get();

            if ($company_duplicates->count() > 1) {
                foreach ($company_duplicates as $key => $company_duplicate) {
                    if ($key > 0) { ##On conserve le premier et on supprime les doublons
                        $company_duplicate->delete();
                    }
                }
            }
        }

        return $this->sendResponse($data, "Entreprises importées avec succès!!");
    }

    ##__EXPORTATION DES ELUS CONSULAIRES
    function ExportCompanies(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR PRODUCT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return Excel::download(new CompanyExport, "companiesExported.xlsx");
    }
}
