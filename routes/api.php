<?php

use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\Authorization;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\OrganisationController;
use App\Models\Admin;
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
        Route::any('{id}/password/update', 'UpdatePassword');
        Route::any('{id}/delete', 'DeleteUser');
    });
    Route::any('authorization', [Authorization::class, 'Authorization'])->name('authorization');

    ###========== Organisation ROUTINGS ========###
    Route::prefix('organisation')->group(function () {
        Route::controller(OrganisationController::class)->group(function () {
            Route::any('add', 'AddOrganisation');
            Route::any('all', 'Organisations');
            Route::any('{id}/retrieve', 'RetrieveOrganisation');
            Route::any('{id}/update', 'UpdateOrganisation');
            Route::any('{id}/delete', 'DeleteOrganisation');
        });
    });

    ###========== Admin ROUTINGS ========###
    Route::prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::any('add', 'AddAdmin');
            Route::any('all', 'getAdmins');
            Route::any('{id}/retrieve', 'retrieveAdmins');
            Route::any('{id}/update', 'updateAdmins');
            Route::any('{id}/delete', 'adminDelete');
        });
    });
});
