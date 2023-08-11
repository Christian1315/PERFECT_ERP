<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

class AdminController extends ADMIN_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
        $this->middleware("CheckSuperAdmin");
    }

    #AJOUT DU ADMIN
    function AddAdmin(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
        $validator = $this->Admin_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
            return $this->sendError($validator->errors(), 404);
        }


        #ENREGISTREMENT DANS LA DB VIA **createAdmin** DE LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
        return $this->createAdmin($request);
    }

    #GET ALL ADMINS
    function Admins(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUTS LES Admins
        return $this->getAdmins();
    }

    #GET AN ADMIN
    function RetrieveAdmin(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DU ADMIN
        return $this->retrieveAdmins($id);
    }

    #RECUPERER UN ADMIN
    function UpdateAdmin(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ADMIN_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE ADMIN VIA SON **id**
        return $this->updateAdmins($request, $id);
    }

    function DeleteAdmin(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS ADMIN_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->adminDelete($id);
    }
}
