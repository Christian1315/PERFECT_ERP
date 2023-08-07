<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Elector;
use App\Models\Vote;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class VOTE_HELPER extends BASE_HELPER
{
    ##======== VOTE VALIDATION =======##
    static function vote_rules(): array
    {
        return [
            'name' => ['required', Rule::unique('votes')],
            'status' => ['required'],
        ];
    }

    static function vote_messages(): array
    {
        return [
            // 'name.required' => 'Le name est réquis!',
            // 'name.uniq' => 'Ce Champ est un mail!',
            // 'phone.required' => 'Le phone est réquis!',
            // 'phone.unique' => 'Le phone est existe déjà!',
        ];
    }

    static function Vote_Validator($formDatas)
    {
        #
        $rules = self::vote_rules();
        $messages = self::vote_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createVote($request)
    {
        $formData = $request->all();

        $user =  request()->user();

        if ($user->is_super_admin) { #S'IL EST UN SUPER ADMIN
            #ON VERIFIE JUSTE L'ORGANISATION VIA SON ID
            $organisation = null;
        } else { #S'IL N'EST PAS UN SUPER ADMIN
            #ON RECUPERE SON ORGANISATION
            $user_organisation_id = $user->organisation; #recuperation de l'ID de l'organisation affectée au user
            $organisation = Get_User_Organisation($user_organisation_id);

            $formData["organisation"] = $organisation->id;
        }
        // #AFFECTATION DU ROLE **$role** AU USER **$user** 
        // $user->roles()->attach($role);
        ##ENREGISTREMENT DE L'ELECTEUR DANS LA DB
        $vote = Vote::create($formData);

        $vote->owner = request()->user()->id;
        $vote->organisation = $formData["organisation"];
        $vote->save();

        return self::sendResponse($vote, 'Vote crée avec succès!!');
    }

    static function getVotes()
    {
        $vote =  Vote::with(['owner'])->where(["owner" => request()->user()->id])->orderBy("id", "desc")->get();
        return self::sendResponse($vote, 'Tout les votes récupérés avec succès!!');
    }

    static function retrieveVotes($id)
    {
        $vote = Vote::with(['owner'])->where(["owner" => request()->user()->id, "id" => $id])->get();
        if ($vote->count() == 0) {
            return self::sendError("Ce vote n'existe pas!", 404);
        }
        return self::sendResponse($vote, "Vote récupéré(e) avec succès:!!");
    }

    static function updateVotes($request, $id)
    {
        $formData = $request->all();
        $vote = Vote::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if ($vote->count() == 0) {
            return self::sendError("Ce vote n'existe pas!", 404);
        }

        #FILTRAGE POUR EVITER LES DOUBLONS
        if ($request->get("name")) {
            $name = Elector::where(['name' => $formData['name'], 'owner' => request()->user()->id])->get();

            if (!count($name) == 0) {
                return self::sendError("Ce name existe déjà!!", 404);
            }
        }

        $elector = $elector[0];
        $elector->update($formData);
        return self::sendResponse($elector, "Electeur modifié(e) avec succès:!!");
    }

    static function voteDelete($id)
    {
        $vote = Vote::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if (count($vote) == 0) {
            return self::sendError("Ce Vote n'existe pas!", 404);
        };
        $vote = $vote[0];
        $vote->delete();
        return self::sendResponse($vote, 'Ce Vote a été supprimé avec succès!');
    }
}
