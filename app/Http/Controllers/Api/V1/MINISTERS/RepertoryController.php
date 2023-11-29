<?php

namespace App\Http\Controllers\Api\V1\MINISTERS;

use App\Exports\RepertoryExport;
use App\Imports\RepertorysImport;
use App\Models\Repertory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RepertoryController extends REPERTORY_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access'])->except([
            "_GenerateRepertoryBadgeViaHtml",
            "_RetrieveRepertory",
            "ExportRepertorys"
        ]);

        set_time_limit(0);
    }

    #AJOUT DU Repertory
    function AddRepertory(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
        $validator = $this->Repertory_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError($validator->errors(), 404);
        }


        #ENREGISTREMENT DANS LA DB VIA **createRepertory** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
        return $this->createRepertory($request);
    }

    ##__IMPORTATION DE REPERTOIRES
    public function ImportRepertorys(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        ### VEUILLEZ CHOISIR COMME UN EXEMPLAIE, LE FICHIER EXCEL **contacts.xlsx** QUI SE TROUVE DANS LA RACINE DU PROJET
        if (!$request->file('repertories')) {
            return $this->sendError("Veuillez charger le fichier excel!", 404);
        }
        $formdata = $request->file('repertories');

        $data = Excel::import(new RepertorysImport, $formdata);

        $repertories = Repertory::all();

        foreach ($repertories as $repertorie) {
            $repertorie_duplicates = Repertory::where([
                "lastname" => $repertorie->lastname,
                "firstname" => $repertorie->firstname,
                "contact" => $repertorie->contact,
                "ministry" => $repertorie->ministry,
                "denomination" => $repertorie->denomination,
                "residence" => $repertorie->residence,
                "commune" => $repertorie->commune,
            ])->get();

            if ($repertorie_duplicates->count() > 1) {
                foreach ($repertorie_duplicates as $key => $contact_duplicate) {
                    if ($key > 0) { ##On conserve le premier et on supprime les doublons
                        $contact_duplicate->delete();
                    }
                }
            }
        }
        return $this->sendResponse($data, "Repertoires importés avec succès!!");
    }

    function ExportRepertorys(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return Excel::download(new RepertoryExport,"repertories.xlsx");
    }

    #GET ALL REPERTORY
    function Repertories(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUTS LES REPERTOIRES
        return $this->getRepertories();
    }

    #GET AN REPERTORY
    function _RetrieveRepertory(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DU Repertory
        return $this->retrieveRepertory($id);
    }

    #RECUPERER UN Repertory
    function _UpdateRepertory(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE Repertory VIA SON **id**
        return $this->updateRepertory($request, $id);
    }

    function DeleteRepertory(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS REPERTORY_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->repertoryDelete($id);
    }

    function _GenerateRepertoryQr(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->generateQr($request, $id);
    }

    function _GenerateRepertoryBadge(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR REPERTORY_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->generateBadge($request, $id);
    }

    function _GenerateRepertoryBadgeViaHtml(Request $request, $id)
    {
        $repertory = Repertory::where(["visible" => 1])->find($id);

        if (!$repertory) {
            return $this->sendError("Ce repertoire n'existe pas!", 404);
        }

        if (!$repertory->qr_code) {
            return self::sendError("Ce contact ne dispose pas de code Qr! Vous ne pouvez donc pas lui générer un badge", 505);
        }

        return view("badge", compact(["repertory"]));
    }
}
