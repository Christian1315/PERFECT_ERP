<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use App\Exports\ExportElectedConsulars;
use App\Imports\ImportElectedConsular;
use App\Models\ElectedConsular;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ElectedConsularController extends CONSULAR_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access'])->except([
            "ExportElectedConsulars",
        ]);
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

    ##__IMPORTATION DES ELUS CONSULAIRES
    public function ImportElectedConsulars(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        ### VEUILLEZ CHOISIR COMME UN EXEMPLAIE, LE FICHIER EXCEL **consulars.xlsx** QUI SE TROUVE DANS LA RACINE DU PROJET
        if (!$request->file('consulars')) {
            return $this->sendError("Veuillez charger le fichier excel!", 404);
        }
        $formdata = $request->file('consulars');
        $data = Excel::import(new ImportElectedConsular, $formdata);
        $consulars = ElectedConsular::all();

        foreach ($consulars as $consular) {
            $consular_duplicates = ElectedConsular::where([
                "owner" => request()->user()->id,
                "ifu" => $consular->ifu,
                "npi" => $consular->npi,
                "firstname" => $consular->firstname,
                "lastname" => $consular->lastname,
                "sexe" => $consular->sexe,
                // "photo" => $consular->photo,
                "phone" => $consular->phone,
                "email" => $consular->email,
                "birth_date" => $consular->birth_date,
                "place_of_birth" => $consular->place_of_birth,
                "country_of_birth" => $consular->country_of_birth,
                "nationnality" => $consular->nationnality,
            ])->get();

            if ($consular_duplicates->count() > 1) {
                foreach ($consular_duplicates as $key => $consular_duplicate) {
                    if ($key > 0) { ##On conserve le premier et on supprime les doublons
                        $consular_duplicate->delete();
                    }
                }
            }
        }
        return $this->sendResponse($data, "Elus consulaires importés avec succès!!");
    }

    ##__EXPORTATION DES ELUS CONSULAIRES
    function ExportElectedConsulars(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR PRODUCT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return Excel::download(new ExportElectedConsulars, "exportedConsulars.xlsx");
    }
}
