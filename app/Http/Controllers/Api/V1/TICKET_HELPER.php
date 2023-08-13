<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Member;
use App\Models\TICKET;
use App\Models\TicketStatus;
use App\Models\TicketType;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TICKET_HELPER extends BASE_HELPER
{
    ##======== TICKET VALIDATION =======##
    static function TICKET_rules(): array
    {
        return [
            'name' => ['required', Rule::unique('tickets')],
            'priority' => ['required', "integer"],
            'type' => ['required', "integer"],
            'member' => ['required', "integer"],
            'tags' => ['required'],
        ];
    }

    static function TICKET_messages(): array
    {
        return [];
    }

    static function TICKET_Validator($formDatas)
    {
        $rules = self::TICKET_rules();
        $messages = self::TICKET_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ##======== ticket AFFECTATION TO TICKET VALIDATION =======##
    static function ticket_affect__rules(): array
    {
        return [
            'TICKET_id' => ['required', "integer"],
            'ticket_id' => ['required', "integer"],
        ];
    }

    static function ticket_affect_messages(): array
    {
        return [];
    }

    static function ticket_affect_Validator($formDatas)
    {
        #
        $rules = self::ticket_affect__rules();
        $messages = self::ticket_affect_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createTICKET($request)
    {
        $formData = $request->all();

        $user = request()->user();

        $type = TicketType::where("id", $formData["type"])->get();
        if ($type->count() == 0) {
            return self::sendError("Ce type de ticket n'existe pas", 404);
        }

        $member = Member::where(["id" => $formData["member"], "owner" => $user->id])->get();
        if ($member->count() == 0) {
            return self::sendError("Ce membre n'existe pas", 404);
        }

        $status = TicketStatus::find(1);

        #Detection de l'organisation
        if ($user->is_super_admin) { #S'il sagit d'un super_admin
            $organisation = null;
            $organisationId = null;
        } else { #S'il sagit d'un simple admin
            $organisation = $user->belong_to_organisation; #RECUPEARATION DE L'ORGANISATION A LAQUELLE LE USER(admin ou super_admin) APPARTIENT
            $organisationId = $organisation->id;
        }

        $TICKET = TICKET::create($formData); #ENREGISTREMENT DE L'ORGANISATION DANS LA DB
        $TICKET->organisation = $organisationId;
        $TICKET->status = $status->id;
        $TICKET->owner = request()->user()->id;
        $TICKET->save();
        return self::sendResponse($TICKET, 'TICKET crée avec succès!!');
    }

    static function getTICKETs()
    {
        $TICKETs =  TICKET::with(["affected_to", "status"])->where(["owner" => request()->user()->id])->orderBy("id", "desc")->get();
        return self::sendResponse($TICKETs, 'Tout les TICKETs récupérés avec succès!!');
    }

    static function retrieveTICKETs($id)
    {
        $TICKET = TICKET::with(["affected_to", "status"])->where(["id" => $id, "owner" => request()->user()->id])->get();
        if ($TICKET->count() == 0) {
            return self::sendError("Ce TICKET n'existe pas!", 404);
        }
        return self::sendResponse($TICKET, "TICKET récupéré(e) avec succès:!!");
    }

    static function updateTICKETs($request, $id)
    {
        $formData = $request->all();
        // return $formData;
        $TICKET = TICKET::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if ($TICKET->count() == 0) {
            return self::sendError("Ce TICKET n'existe pas!", 404);
        }

        #FILTRE POUR EVITER LES DOUBLONS
        if ($request->get("name")) {
            $ticket = TICKET::where(['name' => $formData['name']])->get();

            if (!count($ticket) == 0) {
                return self::sendError("Ce name existe déjà!!", 404);
            }
        }

        if ($request->get("status")) {
            $status = TicketStatus::where(['id' => $formData['status']])->get();

            if (count($status) == 0) {
                return self::sendError("Ce status n'existe pas!!", 404);
            }
        }

        $TICKET = $TICKET[0];
        $TICKET->update($formData);
        return self::sendResponse($TICKET, "TICKET modifié avec succès:!!");
    }

    static function TICKETDelete($id)
    {
        $TICKET = TICKET::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if (count($TICKET) == 0) {
            return self::sendError("Ce TICKET n'existe pas!", 404);
        };

        #DELETE DU TICKET
        $TICKET = $TICKET[0];
        $TICKET->delete();

        return self::sendResponse($TICKET, 'Ce TICKET a été supprimé avec succès!');
    }
}
