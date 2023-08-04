<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class USER_HELPER extends BASE_HELPER
{
    ##======== REGISTER VALIDATION =======##
    static function register_rules(): array
    {
        return [
            'account' => 'required',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => ['required', Rule::unique('users')],
        ];
    }

    static function register_messages(): array
    {
        return [
            'account.required' => 'Le champ username est réquis!',
            'email.required' => 'Le champ Email est réquis!',
            'email.email' => 'Ce champ est un mail!',
            'email.unique' => 'Ce mail existe déjà!',
            'password.required' => 'Le champ Password est réquis!',
        ];
    }

    static function Register_Validator($formDatas)
    {
        #
        $rules = self::register_rules();
        $messages = self::register_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function createUser($formData)
    {
        $formData['password'] = Hash::make($formData['password']); #Hashing du password
        $user = User::create($formData); #ENREGISTREMENT DU USER DANS LA DB
        return self::sendResponse($user, 'User crée avec succès!!');
    }

    ##======== LOGIN VALIDATION =======##
    static function login_rules(): array
    {
        return [
            'account' => 'required',
            'password' => 'required',
        ];
    }

    static function login_messages(): array
    {
        return [
            'account.required' => 'Le champ Username est réquis!',
            'password.required' => 'Le champ Password est réquis!',
        ];
    }

    static function Login_Validator($formDatas)
    {
        #
        $rules = self::login_rules();
        $messages = self::login_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function userAuthentification($request)
    {
        if (is_numeric($request->get('account'))) {
            $credentials  =  ['phone' => $request->get('account'), 'password' => $request->get('password')];
            // $user = User::where(["phone" => $request->get('account')])->get();
        } elseif (filter_var($request->get('account'), FILTER_VALIDATE_EMAIL)) {
            $credentials  =  ['email' => $request->get('account'), 'password' => $request->get('password')];
            // $user = User::where(["email" => $request->get('account')])->get();
        } else {
            $credentials  =  ['username' => $request->get('account'), 'password' => $request->get('password')];
            // $user = User::where(["username" => $request->get('account')])->get();
        }

        if (Auth::attempt($credentials)) { #SI LE USER EST AUTHENTIFIE
            $user = Auth::user();
            $token = $user->createToken('MyToken', ['api-access'])->accessToken;
            $user['token'] = $token;

            #RENVOIE D'ERREURE VIA **sendResponse** DE LA CLASS BASE_HELPER
            return self::sendResponse($user, 'Vous etes connecté(e) avec succès!!');
        }

        #RENVOIE D'ERREURE VIA **sendResponse** DE LA CLASS BASE_HELPER
        return self::sendError('Connexion échouée! Vérifiez vos données puis réessayez à nouveau!', 500);
    }

    static function getUsers()
    {
        $users =  User::all();
        return self::sendResponse($users, 'Touts les utilisatreurs récupérés avec succès!!');
    }

    static function retrieveUsers($id)
    {
        $user = User::where('id', $id)->get();
        if ($user->count() == 0) {
            return self::sendError("Ce utilisateur n'existe pas!", 404);
        }
        return self::sendResponse($user, "Utilisateur récupéré(e) avec succès:!!");
    }

    static function userLogout($request)
    {
        $request->user()->token()->revoke();
        // DELETING ALL TOKENS REMOVED
        // Artisan::call('passport:purge');
        return self::sendResponse([], 'Vous etes déconnecté(e) avec succès!');
    }
}
