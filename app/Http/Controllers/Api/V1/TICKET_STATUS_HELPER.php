<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\TicketStatus;

class TICKET_STATUS_HELPER extends BASE_HELPER
{

    static function getStatus()
    {
        $status =  TicketStatus::orderBy("id", "desc")->get();
        return self::sendResponse($status, 'Tout les status de TICKETs récupérés avec succès!!');
    }

    static function retrieveStatus($id)
    {
        $status = TicketStatus::where(["id" => $id])->get();
        if ($status->count() == 0) {
            return self::sendError("Ce Satus n'existe pas!", 404);
        }
        return self::sendResponse($status, "Status récupéré(e) avec succès:!!");
    }
}
