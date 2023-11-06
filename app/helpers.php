<?php

use App\Models\User;
use App\Models\UserRole;
use App\Notifications\SendNotification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

function userCount()
{
    return count(User::all()) + 1;
}

function Custom_Timestamp()
{
    $date = new DateTimeImmutable();
    $micro = (int)$date->format('Uu'); // Timestamp in microseconds
    return $micro;
}
function Get_Username($user, $type)
{
    $created_date = $user->created_at;

    $year = explode("-", $created_date)[0]; ##RECUPERATION DES TROIS PREMIERS LETTRES DU USERNAME
    $an = substr($year, -2);

    $username =  $type . $an . userCount();
    return $username;
}

##======== CE HELPER PERMET D'ENVOYER DES SMS VIA PHONE ==========## 

function Login_To_Frik_SMS()
{
    $response = Http::post(env("SEND_SMS_API_URL") . "/api/v1/login", [
        "username" => "admin",
        "password" => "admin",
    ]);

    return $response;
}

function Send_SMS($phone, $message, $token = null)
{
    $response = Http::post(env("SEND_SMS_API_URL") . "/api/v1/sms/send_sms_from_other_plateforme", [
        "phone" => $phone,
        "message" => $message,
        "expediteur" => env("EXPEDITEUR"),
    ]);

    $response->getBody()->rewind();
}

function Send_Notification($receiver, $subject, $message)
{
    $data = [
        "subject" => $subject,
        "message" => $message,
    ];

    Notification::send($receiver, new SendNotification($data));
}

##======== CE HELPER PERMET DE VERIFIER SI LE USER EST UN SIMPLE ADMIN OU PAS ==========## 
function Is_User_An_Admin($userId)
{ #
    $user = User::where(['id' => $userId, 'is_admin' => 1])->get();
    if (count($user) == 0) {
        return false;
    }
    return true; #Sil est un Simple Admin
}

##======== CE HELPER PERMET DE VERIFIER SI LE USER EST UN SUPER ADMIN OU PAS ==========## 
function Is_User_A_Super_Admin($userId)
{ #
    $user = User::where(['id' => $userId, 'is_super_admin' => 1])->get();
    if (count($user) == 0) {
        return false;
    }
    return true; #Sil est un Super Admin
}

function Is_User_A_SimpleAdmin_Or_SuperAdmin($userId)
{
    if (Is_User_An_Admin($userId) || Is_User_A_Super_Admin($userId)) {
        return true; #S'il s'agit d'un Simple Admin ou d'un Super Admin
    }
    return false; #S'il n'est ni l'un nil'autre
}


function GET_USER_ROLES($userId)
{
    $roles = UserRole::with(["role", "user"])->where(["user_id" => $userId])->get();
    return $roles;
}
