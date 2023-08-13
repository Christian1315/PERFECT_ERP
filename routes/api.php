<?php

use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\Authorization;
use App\Http\Controllers\Api\V1\MemberController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\OrganisationController;
use App\Http\Controllers\Api\V1\TeamController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\TicketStatusController;
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
        Route::prefix("user")->group(function () {
            Route::any('login', 'Login');
            Route::middleware(['auth:api'])->get('logout', 'Logout');
            Route::any('users', 'Users');
            Route::any('users/{id}', 'RetrieveUser');
            Route::any('{id}/password/update', 'UpdatePassword');
            Route::any('{id}/delete', 'DeleteUser');
        });
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
            Route::any('all', 'Admins');
            Route::any('{id}/retrieve', 'RetrieveAdmins');
            Route::any('{id}/update', 'UpdateAdmins');
            Route::any('{id}/delete', 'AdminDelete');
        });
    });

    ###========== TEAM ROUTINGS ========###
    Route::prefix('team')->group(function () {
        Route::controller(TeamController::class)->group(function () {
            Route::any('add', 'AddTeam');
            Route::any('all', 'TEAMs');
            Route::any('{id}/retrieve', 'RetrieveTeams');
            Route::any('{id}/update', 'UpdateTEAM');
            Route::any('{id}/delete', 'TeamDelete');
            Route::any('/affect-to-member', '_AffectToMember');
        });
    });

    ###========== MEMBERS ROUTINGS ========###
    Route::prefix('member')->group(function () {
        Route::controller(MemberController::class)->group(function () {
            Route::any('add', 'AddMember');
            Route::any('all', 'Members');
            Route::any('{id}/retrieve', 'RetrieveMember');
            Route::any('{id}/update', 'UpdateMember');
            Route::any('{id}/delete', 'DeleteMember');
        });
    });

    ###========== TICKETS STATUS ROUTINGS ========###
    Route::prefix('tickeStatus')->group(function () {
        Route::controller(TicketStatusController::class)->group(function () {
            Route::any('all', 'Status');
            Route::any('{id}/retrieve', '_RetrieveStatus');
        });
    });

    ###========== TICKETS ROUTINGS ========###
    Route::prefix('ticket')->group(function () {
        Route::controller(TicketController::class)->group(function () {
            Route::any('add', 'AddTICKET');
            Route::any('all', 'TICKETs');
            Route::any('{id}/retrieve', 'RetrieveTICKET');
            Route::any('{id}/update', 'UpdateTICKET');
            Route::any('{id}/delete', 'DeleteTICKET');
        });
    });
});
