<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Candidat;
use App\Models\Elector;
use App\Models\Organisation;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ELECTOR_HELPER extends BASE_HELPER
{
    ##======== ELECTOR VALIDATION =======##
    static function elector_rules(): array
    {
        return [
            'name' => ['required', Rule::unique('electors')],
            'phone' => ['required', Rule::unique("electors")],
            'email' => ['required', "email", Rule::unique("electors")],
        ];
    }

    static function elector_messages(): array
    {
        return [
            'name.required' => 'Le name est réquis!',
            'email.required' => 'L\'email est réquis!',
            'email.unique' => 'L\'email existe déjà!',
            'email.email' => 'Ce Champ est un mail!',
            'phone.required' => 'Le phone est réquis!',
            'phone.unique' => 'Le phone est existe déjà!',
        ];
    }

    static function Elector_Validator($formDatas)
    {
        #
        $rules = self::elector_rules();
        $messages = self::elector_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createElector($request)
    {
        $formData = $request->all();
        $secret_code = Str::uuid();


        ##ENREGISTREMENT DE L'ELECTEUR DANS LA DB
        $elector = Elector::create($formData);
        $elector->owner = request()->user()->id;
        $elector->secret_code = $secret_code;
        $elector->identifiant = userCount() . Custom_Timestamp() . userCount();
        $elector->save();

        #=====ENVOIE D'SMS =======~####
        $sms_login =  Login_To_Frik_SMS();

        if ($sms_login['status']) {
            $token =  $sms_login['data']['token'];
            $vote_url = env("BASE_URL") . "/vote/" . $elector->identifiant . "/" . $elector->secret_code;
            Send_SMS(
                $formData['phone'],
                "Vous avez été ajouté en tant qu'electeur sur e-voting! Cliquez ici pour voter: " . $vote_url,
                $token
            );
        }
        return self::sendResponse($elector, 'Electeur crée avec succès!!');
    }

    static function getElectors()
    {
        $elector =  Elector::with(['owner', "votes"])->where(["owner" => request()->user()->id])->orderBy("id", "desc")->get();
        return self::sendResponse($elector, 'Tout les electeurs récupérés avec succès!!');
    }

    static function retrieveElectors($id)
    {
        $elector = Elector::with(['owner', "votes"])->where(["owner" => request()->user()->id, "id" => $id])->get();
        if ($elector->count() == 0) {
            return self::sendError("Ce elector n'existe pas!", 404);
        }
        return self::sendResponse($elector, "Elector récupéré(e) avec succès:!!");
    }

    static function updateElectors($request, $id)
    {
        $formData = $request->all();
        $elector = Elector::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if ($elector->count() == 0) {
            return self::sendError("Ce Elector n'existe pas!", 404);
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

    static function electorDelete($id)
    {
        $elector = Elector::where(['id' => $id, 'owner' => request()->user()->id])->get();
        if (count($elector) == 0) {
            return self::sendError("Ce Electeur n'existe pas!", 404);
        };
        $elector = $elector[0];
        $elector->delete();
        return self::sendResponse($elector, 'Ce electeur a été supprimé avec succès!');
    }
}
