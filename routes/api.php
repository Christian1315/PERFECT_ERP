<?php

use App\Http\Controllers\Api\V1\Authorization;
use App\Http\Controllers\Api\V1\SmsController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\ContactController;
use App\Http\Controllers\Api\V1\GroupeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('v1')->group(function () {
    ###========== USERs ROUTINGS ========###
    Route::controller(UserController::class)->group(function () {
        Route::any('login', 'Login');
        Route::middleware(['auth:api'])->get('logout', 'Logout');
        Route::any('users', 'Users');
        Route::any('users/{id}', 'RetrieveUser');
    });
    Route::any('authorization', [Authorization::class, 'Authorization'])->name('authorization');
});
