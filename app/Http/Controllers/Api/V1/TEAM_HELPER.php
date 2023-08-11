<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Member;
use App\Models\TEAM;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TEAM_HELPER extends BASE_HELPER
{
    ##======== TEAM VALIDATION =======##
    static function TEAM_rules(): array
    {
        return [
            'name' => ['required', Rule::unique('teams')],
            'description' => ['required'],
        ];
    }

    static function TEAM_messages(): array
    {
        return [
            'name.required' => 'Le name est réquis!',
            'name.unique' => 'Ce name existe déjà!',
            'description.required' => 'La description est réquise!',
        ];
    }

    static function TEAM_Validator($formDatas)
    {
        $rules = self::TEAM_rules();
        $messages = self::TEAM_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    ##======== MEMBER AFFECTATION TO TEAM VALIDATION =======##
    static function member_affect__rules(): array
    {
        return [
            'team_id' => ['required', "integer"],
            'member_id' => ['required', "integer"],
        ];
    }

    static function member_affect_messages(): array
    {
        return [];
    }

    static function Member_affect_Validator($formDatas)
    {
        #
        $rules = self::member_affect__rules();
        $messages = self::member_affect_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createTEAM($request)
    {
        $formData = $request->all();

        $user = request()->user();

        #Detection de l'organisation
        if ($user->is_super_admin) { #S'il sagit d'un super_admin
            $organisation = null;
            $organisationId = null;
        } else { #S'il sagit d'un simple admin
            $organisation = $user->belong_to_organisation; #RECUPEARATION DE L'ORGANISATION A LAQUELLE LE USER(admin ou super_admin) APPARTIENT
            $organisationId = $organisation->id;
        }

        #TRAITEMENT DU CHAMP **members** renseigné PAR LE USER
        if ($request->get("members")) {
            $members = $formData["members"];
            $members_ids = explode(",", $members);
            foreach ($members_ids as $id) {
                $member = Member::where(["id" => $id, "owner" => $user->id]);
                if ($member->count() == 0) {
                    return self::sendError("Le membre d'id :" . $id . " n'existe pas!", 404);
                }
            }
        }

        #Recuperation de l'admin associé à ce user
        $this_admin = request()->user()->as_admin;

        $TEAM = TEAM::create($formData); #ENREGISTREMENT DE L'ORGANISATION DANS LA DB
        $TEAM->organisation = $organisationId;
        // return $this_admin ? $this_admin->id : null;
        $TEAM->owner = request()->user()->id;
        $TEAM->admin = $this_admin ? $this_admin->id : null; #Recuperation de l'ID de l'admin
        $TEAM->save();


        #AFFECTATION DU MEMBRE AU TEAM
        if ($request->get("members")) {
            foreach ($members_ids as $id) {
                $member = Member::where(["id" => $id, "owner" => $user->id])->get();
                $TEAM->members()->attach($member);
            }
        }

        return self::sendResponse($TEAM, 'TEAM crée avec succès!!');
    }

    static function getTEAMs()
    {
        $TEAMs =  TEAM::with(["belong_to_admin","members"])->where(["owner" => request()->user()->id])->orderBy("id", "desc")->get();
        return self::sendResponse($TEAMs, 'Tout les teams récupérés avec succès!!');
    }

    static function retrieveTEAMs($id)
    {
        $TEAM = TEAM::with(["belong_to_admin","members"])->where(["id" => $id, "owner" => request()->user()->id])->get();
        if ($TEAM->count() == 0) {
            return self::sendError("Ce team n'existe pas!", 404);
        }
        return self::sendResponse($TEAM, "TEAM récupéré(e) avec succès:!!");
    }

    static function updateTEAMs($request, $id)
    {
        $formData = $request->all();
        // return $formData;
        $TEAM = TEAM::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if ($TEAM->count() == 0) {
            return self::sendError("Ce TEAM n'existe pas!", 404);
        }

        #FILTRAGE POUR EVITER LES DOUBLONS
        if ($request->get("name")) {
            $name = TEAM::where(['name' => $formData['name'], 'owner' => request()->user()->id])->get();

            if (!count($name) == 0) {
                return self::sendError("Ce name existe déjà!!", 404);
            }
        }

        $TEAM = $TEAM[0];
        $TEAM->update($formData);
        return self::sendResponse($TEAM, "Team récupéré(e) avec succès:!!");
    }

    static function teamDelete($id)
    {
        $TEAM = TEAM::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if (count($TEAM) == 0) {
            return self::sendError("Ce team n'existe pas!", 404);
        };

        #DELETE DU TEAM
        $TEAM = $TEAM[0];
        $TEAM->delete();

        return self::sendResponse($TEAM, 'Ce team a été supprimé avec succès!');
    }

    static function AffectToMember($request)
    {
        $formData = $request->all();
        $member = Member::where(['id' => $formData['member_id'], 'owner' => request()->user()->id])->get();
        if ($member->count() == 0) {
            return self::sendError("Ce member n'existe pas!", 404);
        };

        $team = Team::where(['id' => $formData['team_id'], 'owner' => request()->user()->id])->get();
        if ($team->count() == 0) {
            return self::sendError("Ce team n'existe pas!", 404);
        };

        $team = $team[0];

        $team->members()->attach($member);
        return self::sendResponse($team, "Affectation effectuée avec succès!");
    }
}
