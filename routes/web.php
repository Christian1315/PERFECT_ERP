<?php

use App\Http\Controllers\Api\V1\CARDS\CardController;
use App\Http\Controllers\Api\V1\CARDS\ElectedConsularController;
use App\Http\Controllers\Api\V1\MINISTERS\RepertoryController;

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


###__EXPORTATION DES REPERTOIRES___#####
Route::any('repertory/export', [RepertoryController::class, 'ExportRepertorys']); #EXPORTER DES REPERTOIRES

###__EXPORTATION DES ELUS CONSULAIRES___#####
Route::any('/card/elected_consular/export', [ElectedConsularController::class, 'ExportElectedConsulars']); #EXPORTER DES REPERTOIRES

####___RECUPERATION DES BADGE VIA LE FORMAT HTML
Route::get("{id}/badge", [RepertoryController::class, "_GenerateRepertoryBadgeViaHtml"]);
