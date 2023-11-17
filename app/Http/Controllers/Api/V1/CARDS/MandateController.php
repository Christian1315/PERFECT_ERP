<?php

namespace App\Http\Controllers\Api\V1\CARDS;

use Illuminate\Http\Request;

class MandateController extends MANDATE_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
    }

    #AJOUT D'UNE MANDATURE
    function AddMandate(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
        $validator = $this->Mandate_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **createmandate** DE LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
        return $this->createMandate($request);
    }

    #GET ALL MANDATES
    function Mandates(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUTS LES MANDATES
        return $this->getMandates();
    }

    #GET AN MANDATES
    function _RetrieveMandate(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DU mandate
        return $this->retrieveMandate($id);
    }

    #RECUPERER UN mandate
    function _UpdateMandate(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR MANDATE_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE mandate VIA SON **id**
        return $this->updateMandate($request, $id);
    }

    function DeleteMandate(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS MANDATE_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->mandateDelete($id);
    }
}
