<?php

namespace App\Http\Controllers\Api\V1\STOCK;

use App\Http\Controllers\Api\V1\BASE_HELPER;
use App\Models\Marketeur;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MARKETER_HELPER extends BASE_HELPER
{
    ##======== marketer VALIDATION =======##
    static function marketer_rules(): array
    {
        return [
            'name' => ['required'],
            'phone' => ['required', "numeric"],
            'email' => ['required', 'email', Rule::unique('marketeurs')],
        ];
    }

    static function marketer_messages(): array
    {
        return [
            'name.required' => 'Le name est réquis!',
            'phone.required' => 'Le phone est réquis!',

            'phone.numeric' => 'Le phone doit être de format numéric!',
            'email.required' => 'Le champ email est réquis!',
            'email.email' => 'Ce champ doit être un mail!',
            'email.unique' => 'Ce mail existe déjà!',
        ];
    }

    static function Marketer_Validator($formDatas)
    {
        $rules = self::marketer_rules();
        $messages = self::marketer_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createMarketer($request)
    {
        $formData = $request->all();

        #SON ENREGISTREMENT EN TANT QU'UN USER
        $user = request()->user();
        $type = "MARK_";

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

        ###__AFFECTONS A CE USER LE ROLE MARKETEUR
        $role = Role::find(1);
        $user->roles()->attach($role);

        ###___
        $formData["username"] = $username;
        $marketer = Marketeur::create($formData);
        $marketer->as_user = $user->id;
        $marketer->owner = request()->user()->id;
        $marketer->save();

        #=====~~ENVOIE D'SMS =======~####
        $message = "Vous avez été ajouté.e à PERFECT_ERP entant que marketeur sur PERFECT_ERP. Veuillez contacter l'administrateur pour avoir les détails de votre compte";

        try {
            // Send_SMS(
            //     $formData['phone'],
            //     $message,
            // );

            ###___
            Send_Notification(
                $user,
                "AJOUTE.e ENTANT QUE MARKETEUR SUR PERFECT_ERP",
                $message
            );
        } catch (\Throwable $th) {
            //throw $th;
        }

        return self::sendResponse($marketer, 'Marketeur crée avec succès!!');
    }

    static function getMarketers()
    {
        $user = request()->user();
        $marketeurs =  Marketeur::with(["owner", "as_user", "chargOrders"])->where(["owner" => $user->id])->orderBy("id", "desc")->get();
        return self::sendResponse($marketeurs, 'Tout les marketeurs récupérés avec succès!!');
    }

    static function retrieveMarketer($id)
    {
        $user = request()->user();
        $marketeur = Marketeur::with(["owner", "as_user", "chargOrders"])->where(["owner" => $user->id])->find($id);
        if (!$marketeur) {
            return self::sendError("Ce maketeur n'existe pas!", 404);
        }
        return self::sendResponse($marketeur, "Marketeur récupéré(e) avec succès:!!");
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

    static function marketerDelete($id)
    {
        $user = request()->user();
        $marketeur = Marketeur::find($id);

        if (!$marketeur) {
            return self::sendError("Ce Marketeur n'existe pas!", 404);
        }

        if ($marketeur->owner != $user->id) {
            return self::sendError("Ce Marketeur ne vous appartient pas!", 404);
        }
        $marketeur->delete();

        #DELETE DU USER CORRESPONDANT
        $userId = $marketeur->as_user;
        $user = User::find($userId);
        $user->delete();
        return self::sendResponse($marketeur, 'Ce marketeur a été supprimé avec succès!');
    }
}
