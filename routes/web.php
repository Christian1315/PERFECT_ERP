<?php

use App\Http\Controllers\PdfController;
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
Route::get("user/{id?}", function ($id = null) {
    return 'User ' . $id;
});

Route::get('pdf', [PdfController::class, 'getPostPdf']);

Route::get('send-mail', function () {
    $data = [
        "subject" => "CREATION DE COMPTE ADMIN SUR ERP FINANFA",
        "message" => "Salut Christ",
    ];

    Notification::send(User::find(1), new SendNotification($data));

    dd("Notification envoyée avec succès!");
});
