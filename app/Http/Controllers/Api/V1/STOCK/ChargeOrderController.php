<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use Illuminate\Http\Request;

class ChargeOrderController extends CHARG_ORDER_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
        $this->middleware("CheckIfUserIsMarketeur")->only([
            "AddOrderCharg",
            "_UpdateChargOrder",
            "DeleteChargOrder",
        ]);
    }

    #AJOUT D'UN ORDRE DE CHARGEMENT
    function AddOrderCharg(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
        $validator = $this->Order_Charg_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **createOrderCharg** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
        return $this->createOrderCharg($request);
    }

    #GET ALL CHARG ORDER
    function _GetChargOrders(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUT LES ORDRES DE RECHARGEMENT
        return $this->getChargOrders();
    }

    #GET A CHARG ORDER
    function _RetrieveChargOrder(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UN ORDRE DE RECHARGEMENT
        return $this->retrieveChargOrder($id);
    }

    function _UpdateChargOrder(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UN ORDRE DE RECHARGEMENT VIA SON **id**
        return $this->updateChargOrder($request, $id);
    }

    function DeleteChargOrder(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "DELETE") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS EXPLOITATION_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        return $this->ChargOrderDelete($id);
    }

    ###GENERATION D'UNE LISTE D'ORDRE DE CHARGEMENT
    function GenerateOderList(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS EXPLOITATION_HELPER
            return $this->sendError("La méthode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
        $validator = $this->Order_list_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR EXPLOITATION_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        return $this->generateOrderList($request);
    }
}
