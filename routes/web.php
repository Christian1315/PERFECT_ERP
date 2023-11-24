<?php

use App\Http\Controllers\Api\V1\CARDS\CardController;
use App\Http\Controllers\Api\V1\MINISTERS\RepertoryController;
use App\Http\Controllers\PdfController;
use App\Models\Card;
use App\Models\Company;
use App\Models\CompanyConsular;
use App\Models\ElectedConsular;
use App\Models\Fonction;
use App\Models\Mandate;
use App\Models\Poste;
use App\Models\User;
use App\Notifications\SendNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('send-mail', function () {
    $data = [
        "subject" => "CREATION DE COMPTE ADMIN SUR ERP FINANFA",
        "message" => "Salut Christ",
    ];

    Notification::send(User::find(1), new SendNotification($data));
    dd("Notification envoyée avec succès!");
});

// RECUPERATION DES CARTES VIA LE FORMAT HTML
Route::get("{id}/card", [CardController::class, "_GenerateHtmlCard"]);

Route::get("/card", function () {
    return view("card");
});


// RECUPERATION DES BADGE VIA LE FORMAT HTML
Route::get("{id}/badge", [RepertoryController::class, "_GenerateRepertoryBadgeViaHtml"]);
