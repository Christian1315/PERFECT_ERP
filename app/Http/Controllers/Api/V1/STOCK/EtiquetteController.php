<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use App\Http\Controllers\Api\V1\STOCK\PRODUCT_ETIQUETTE_HELPER;
use Illuminate\Http\Request;

class EtiquetteController extends PRODUCT_ETIQUETTE_HELPER
{
    #VERIFIONS SI LE USER EST AUTHENTIFIE
    public function __construct()
    {
        $this->middleware(['auth:api', 'scope:api-access']);
        // $this->middleware('CheckSession');
        // $this->middleware('CheckMasterOrAdmin')->except(["ProductCategories", "RetrieveProductCategory"]);
    }

    #GET ALL ETIQUETTE
    function ProductEtiquettes(Request $request)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CATEGORY_PRODUCT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION DE TOUTES LES ETIQUETTES DE PRODUIT
        return $this->allProductEtiquette();
    }

    #RECUPERER UNE ETIQUETTE DE PRODUIT
    function RetrieveProductEtiquette(Request $request, $id)
    {
        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "GET") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ETIQUETTE_PRODUCT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #RECUPERATION D'UNE ETIQUETTE DE PRODUIT VIA SON **id**
        return $this->_retrieveProductEtiquette($id);
    }

    function CreateProductEtiquette(Request $request)
    {

        #VERIFICATION DE LA METHOD
        if ($this->methodValidation($request->method(), "POST") == False) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR ETIQUETTE_PRODUCT_HELPER
            return $this->sendError("La methode " . $request->method() . " n'est pas supportée pour cette requete!!", 404);
        };

        #VALIDATION DES DATAs DEPUIS LA CLASS BASE_HELPER HERITEE PAR ETIQUETTE_PRODUCT_HELPER
        $validator = $this->Product_Etiquette_Validator($request->all());

        if ($validator->fails()) {
            #RENVOIE D'ERREURE VIA **sendError** DE LA CLASS BASE_HELPER HERITEE PAR CATEGORY_PRODUCT_HELPER
            return $this->sendError($validator->errors(), 404);
        }

        #ENREGISTREMENT DANS LA DB VIA **_createProductEtiquette** DE LA CLASS BASE_HELPER HERITEE PAR CATEGORY_PRODUCT_HELPER
        return $this->_createProductEtiquette($request->all());
    }
}
