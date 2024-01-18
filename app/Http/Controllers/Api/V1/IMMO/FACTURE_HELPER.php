<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Facture;

class FACTURE_HELPER extends BASE_HELPER
{
    ##======== FACTURE VALIDATION =======##

    static function getFactures()
    {
        $user = request()->user();
        $factures = Facture::with(["Owner", "Location", "Type", "Status","Payement"])->where(["visible" => 1])->get();
        return self::sendResponse($factures, 'Toutes les factures récupérées avec succès!!');
    }

    static function _retrieveFacture($id)
    {
        $user = request()->user();
        $facture = Facture::with(["Owner", "Location", "Type", "Status","Payement"])->where(["visible" => 1])->find($id);
        if (!$facture) {
            return self::sendError("Cette facture n'existe pas!", 404);
        }
        return self::sendResponse($facture, "Facture récupérée avec succès:!!");
    }

    static function factureDelete($id)
    {
        $user = request()->user();
        $facture = Facture::where(["visible" => 1])->find($id);
        if (!$facture) {
            return self::sendError("Cette facture n'existe pas!", 404);
        };

        $facture->visible = 0;
        $facture->delete_at = now();
        $facture->save();
        return self::sendResponse($facture, 'Cette facture a été supprimée avec succès!');
    }
}
