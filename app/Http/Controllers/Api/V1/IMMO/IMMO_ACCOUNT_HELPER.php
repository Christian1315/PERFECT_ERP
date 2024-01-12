<?php

namespace App\Http\Controllers\Api\V1\IMMO;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\ImmoAccount;

class IMMO_ACCOUNT_HELPER extends BASE_HELPER
{
    static function getAccounts()
    {
        $accounts =  ImmoAccount::orderBy("id", "desc")->get();
        return self::sendResponse($accounts, 'Tout les comptes de paiement récupérés avec succès!!');
    }

    static function retrieveAccount($id)
    {
        $account = ImmoAccount::find($id);
        return self::sendResponse($account, "Compte de paiement récupéré avec succès!!");
    }
}
