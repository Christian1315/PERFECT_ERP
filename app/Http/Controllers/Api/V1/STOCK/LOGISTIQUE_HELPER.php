<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Logistique;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LOGISTIQUE_HELPER extends BASE_HELPER
{
    ##======== logistique VALIDATION =======##
    static function logistique_rules(): array
    {
        return [
            'name' => ['required'],
            'phone' => ['required', "numeric"],
            'email' => ['required', 'email', Rule::unique('marketeurs')],
            'description' => ["required"]
        ];
    }

    static function logistique_messages(): array
    {
        return [
            'name.required' => 'Le name est réquis!',
            'phone.required' => 'Le phone est réquis!',

            'phone.numeric' => 'Le phone doit être de format numéric!',
            'email.required' => 'Le champ email est réquis!',
            'email.email' => 'Ce champ doit être un mail!',
            'email.unique' => 'Ce mail existe déjà!',

            'description.required' => "La description du logistiaque est réquise!",
        ];
    }

    static function Logistique_Validator($formDatas)
    {
        $rules = self::logistique_rules();
        $messages = self::logistique_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createLogistique($request)
    {
        $formData = $request->all();

        #SON ENREGISTREMENT EN TANT QU'UN USER
        $user = request()->user();
        $type = "LOGI_";

        $username =  Get_Username($user, $type); ##Get_Username est un helper qui genère le **number** 

        ##VERIFIONS SI LE USER EXISTAIT DEJA
        $user = User::where("username", $username)->get();
        if (count($user) != 0) {
            return self::sendError("Ce compte existe déjà!", 404);
        }
        $user = User::where("phone", $formData['phone'])->get();
        if (count($user) != 0) {
            return self::sendError("Un compte existe déjà au nom de ce phone!", 404);
        }
        $user = User::where("email", $formData['email'])->get();
        if (count($user) != 0) {
            return self::sendError("Un compte existe déjà au nom de ce mail!!", 404);
        }

        $userData = [
            "name" => $formData['name'],
            "username" => $username,
            "phone" => $formData['phone'],
            "email" => $formData['email'],
            "password" => $username,
            "organisation" => null,
        ];

        $user = User::create($userData);

        ###__AFFECTONS A CE USER LE ROLE LOGISTIQUE
        $role = Role::find(3);
        $user->roles()->attach($role);

        ###___
        $formData["username"] = $username;
        $logistique = Logistique::create($formData);
        $logistique->as_user = $user->id;
        $logistique->owner = request()->user()->id;
        $logistique->save();

        #=====~~ENVOIE D'SMS =======~####
        $message = "Vous avez été ajouté.e à PERFECT_ERP entant qu'une logistique sur PERFECT_ERP. Veuillez contacter l'administrateur pour avoir les détails de votre compte";

        try {
            Send_SMS(
                $formData['phone'],
                $message,
            );

            ###___
            Send_Notification(
                $user,
                "AJOUTE.e ENTANT QUE LOGISTIQUE SUR PERFECT_ERP",
                $message
            );
        } catch (\Throwable $th) {
            //throw $th;
        }
        return self::sendResponse($logistique, 'Logistique créee avec succès!!');
    }

    static function getLogistiques()
    {
        $user = request()->user();
        $logistiques =  Logistique::with(["owner", "as_user", "chargOrders"])->where(["owner" => $user->id])->orderBy("id", "desc")->get();
        return self::sendResponse($logistiques, 'Toutes les logistiques récupérées avec succès!!');
    }

    static function retrieveLogistique($id)
    {
        $user = request()->user();
        $logistique = Logistique::with(["owner", "as_user", "chargOrders"])->where(["owner" => $user->id])->find($id);
        if (!$logistique) {
            return self::sendError("Cette logistique n'existe pas!", 404);
        }
        return self::sendResponse($logistique, "Logistique récupérée avec succès:!!");
    }

    // static function updateMarketer($request, $id)
    // {
    //     $formData = $request->all();
    //     $user = request()->user();

    //     $marketeur = Marketeur::find($id);
    //     if (!$marketeur) {
    //         return self::sendError("Ce Marketeur n'existe pas!", 404);
    //     }

    //     if ($marketeur->owner != $user->id) {
    //         return self::sendError("Ce Marketeur ne vous appartient pas!", 404);
    //     }

    //     $marketeur->update($formData);
    //     return self::sendResponse($marketeur, "Marketeur récupéré avec succès:!!");
    // }

    static function logistiqueDelete($id)
    {
        $user = request()->user();
        $logistique = Logistique::find($id);

        if (!$logistique) {
            return self::sendError("Cette logistique n'existe pas!", 404);
        }

        if ($logistique->owner != $user->id) {
            return self::sendError("Cette logistique ne vous appartient pas!", 404);
        }
        $logistique->delete();

        #DELETE DU USER CORRESPONDANT
        $userId = $logistique->as_user;
        $user = User::find($userId);
        $user->delete();
        return self::sendResponse($logistique, 'Cette logistique a été supprimée avec succès!');
    }
}
