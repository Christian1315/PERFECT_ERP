<?php

use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\Authorization;
use App\Http\Controllers\Api\V1\ChargeOrderController;
use App\Http\Controllers\Api\V1\MemberController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\OrganisationController;
use App\Http\Controllers\Api\V1\ProductCategoryController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\TeamController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\TicketStatusController;
use App\Http\Controllers\Api\V1\ProductTypeController;
use App\Http\Controllers\Api\V1\EtiquetteController;
use App\Http\Controllers\Api\V1\LogistiqueController;
use App\Http\Controllers\Api\V1\MarketeurController;
use App\Http\Controllers\Api\V1\ProductStockController;
use App\Http\Controllers\Api\V1\ExploitationController;
use App\Http\Controllers\Api\V1\ChargementController;
use App\Http\Controllers\Api\V1\MINISTERS\RepertoryController;
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

    ###========= GESTION DES STOCK ======##
    Route::prefix('products')->group(function () {
        ###========== PRODUCT TYPE ROUTINGS ========###
        Route::controller(ProductTypeController::class)->group(function () {
            Route::prefix('type')->group(function () {
                Route::any('all', 'ProductTypes'); #RECUPERATION DE TOUT LES TYPES DE PRODUIT
                Route::any('{id}/retrieve', 'RetrieveProductType'); #RECUPERATION D'UN TYPE DE PRODUIT
            });
        });
        ###========== PRODUCT CATEGORY ROUTINGS ========###
        Route::controller(ProductCategoryController::class)->group(function () {
            Route::prefix('category')->group(function () {
                // Route::any('add', 'CreateProductCategory'); #AJOUT D'UNE CATEGORIE DE PRODUIT
                Route::any('all', 'ProductCategories'); #GET ALL CATEGORY DE PRDUIT
                Route::any('{id}/retrieve', 'RetrieveProductCategory'); #RECUPERATION D'UNE CATEGORY DE PRDUIT
                // Route::any('{id}/delete', '_DeleteProductCategory'); #SUPPRESSION D'UNE CATEGORY DE PRDUIT
                // Route::any('{id}/update', 'UpdateProductCategory'); #MODIFICATION D'UN CATEGORY DE PRODUIT
            });
        });

        ###========== PRODUCT ETIQUETTE ROUTINGS ========###
        Route::controller(EtiquetteController::class)->group(function () {
            Route::prefix('etiquette')->group(function () {
                Route::any('add', 'CreateProductEtiquette'); #AJOUT D'UNE ETIQUETTE DE PRODUIT
                Route::any('all', 'ProductEtiquettes'); #GET ALL ETIQUETTE DE PRDUIT
                Route::any('{id}/retrieve', 'RetrieveProductEtiquette'); #RECUPERATION D'UNE ETIQUETTE DE PRDUIT
            });
        });

        ###========== PRODUCTS ROUTINGS ========###
        Route::controller(ProductController::class)->group(function () {
            Route::any('add', 'CreateProduct'); #AJOUT D'UN PRODUIT
            Route::any('all', 'Products'); #GET ALL PRDUIT
            Route::any('{id}/retrieve', 'RetrieveProduct'); #RECUPERATION D'UN PRODUIT
            Route::any('supply', '_SupplyProduct'); #APPROVISIONNER UN PRODUIT DANS UN SUPPLY
            Route::any('{id}/delete', '_DeleteProduct'); #SUPPRESSION D'UN PRODUIT
            Route::any('{id}/update', 'UpdateProduct'); #MODIFICATION D'UN PRODUIT
        });

        ###========== PRODUCT STOCK ROUTINGS ========###
        Route::controller(ProductStockController::class)->group(function () {
            Route::prefix('stock')->group(function () {
                Route::any('all', 'ProductStock'); #GET ALL STOCK DE PRODUIT
                Route::any('{id}/retrieve', 'RetrieveProductStock'); #RECUPERATION D'UNE STOCK DE PRODUIT
            });
        });
    });

    ###========== MARKETERS ROUTINGS ========###
    Route::prefix('marketer')->group(function () {
        Route::controller(MarketeurController::class)->group(function () {
            Route::any('add', 'AddMarketer');
            Route::any('all', 'Marketers');
            Route::any('{id}/retrieve', '_RetrieveMarketer');
            // Route::any('{id}/update', '_UpdateMarketer');
            Route::any('{id}/delete', 'DeleteMarketer');
        });
    });

    ###========== LOGISTIQUES ROUTINGS ========###
    Route::prefix('logistique')->group(function () {
        Route::controller(LogistiqueController::class)->group(function () {
            Route::any('add', 'AddLogistique');
            Route::any('all', 'Logistiques');
            Route::any('{id}/retrieve', '_RetrieveLogistique');
            // Route::any('{id}/update', '_UpdateMarketer');
            Route::any('{id}/delete', 'DeleteLogistique');
        });
    });

    ###========== LOGISTIQUES ROUTINGS ========###
    Route::prefix('exploitation')->group(function () {
        Route::controller(ExploitationController::class)->group(function () {
            Route::any('add', 'AddExploitation');
            Route::any('all', 'Exploitations');
            Route::any('{id}/retrieve', '_RetrieveExploitation');
            // Route::any('{id}/update', '_UpdateMarketer');
            Route::any('{id}/delete', 'DeleteExploitation');
        });
    });

    ###========== ORDRE DE RECHARGEMENT ROUTINGS ========###
    Route::prefix('order')->group(function () {
        Route::controller(ChargeOrderController::class)->group(function () {
            Route::any('add', 'AddOrderCharg');
            Route::any('all', '_GetChargOrders');
            Route::any('{id}/retrieve', '_RetrieveChargOrder');
            Route::any('{id}/update', '_UpdateChargOrder');
            Route::any('{id}/delete', 'DeleteChargOrder');
            Route::any('/generate_list', 'GenerateOderList');
        });
    });

    ###========== CHARGEMENT ROUTINGS ========###
    Route::prefix('chargement')->group(function () {
        Route::controller(ChargementController::class)->group(function () {
            Route::any('add', 'AddChargement');
            Route::any('all', 'Chargements');
            Route::any('{id}/retrieve', '_RetrieveChargement');
            Route::any('{id}/update', '_UpdateChargement');
            Route::any('{id}/delete', 'DeleteChargement');
            Route::any('/generate_list', '_GenerateChargementList');
        });
    });


    ###========== REPERTORIES ROUTINGS ========###
    Route::prefix('repertory')->group(function () {
        Route::controller(RepertoryController::class)->group(function () {
            Route::any('add', 'AddRepertory');
            Route::any('all', 'Repertories');
            Route::any('{id}/retrieve', '_RetrieveRepertory');
            Route::any('{id}/update', '_UpdateRepertory');
            Route::any('{id}/delete', 'DeleteRepertory');
            Route::any('{id}/generate-qr', '_GenerateRepertoryQr');
        });
    });
});
