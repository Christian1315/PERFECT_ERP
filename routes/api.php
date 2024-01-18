<?php

use App\Http\Controllers\Api\V1\ActionController;
use App\Http\Controllers\Api\V1\AdminController;
use App\Http\Controllers\Api\V1\Authorization;
use App\Http\Controllers\Api\V1\CARDS\CompanyController;
use App\Http\Controllers\Api\V1\CARDS\ElectedConsularController;
use App\Http\Controllers\Api\V1\CARDS\FonctionController;
use App\Http\Controllers\Api\V1\CARDS\MandateController;
use App\Http\Controllers\Api\V1\CARDS\PosteController;
use App\Http\Controllers\Api\V1\CARDS\CardController;
use App\Http\Controllers\Api\V1\ChargeOrderController;
use App\Http\Controllers\Api\V1\IMMO\ActivityDomainController;
use App\Http\Controllers\Api\V1\IMMO\AreaControlller;
use App\Http\Controllers\Api\V1\IMMO\CityController;
use App\Http\Controllers\Api\V1\IMMO\ClientController;
use App\Http\Controllers\Api\V1\IMMO\ClientTypeController;
use App\Http\Controllers\Api\V1\IMMO\CounterStatusController;
use App\Http\Controllers\Api\V1\IMMO\CounterTypeController;
use App\Http\Controllers\Api\V1\IMMO\CountryController;
use App\Http\Controllers\Api\V1\IMMO\CurrencyController;
use App\Http\Controllers\Api\V1\IMMO\DepartementController;
use App\Http\Controllers\Api\V1\IMMO\FactureStatusController;
use App\Http\Controllers\Api\V1\IMMO\FactureTypeController;
use App\Http\Controllers\Api\V1\IMMO\HouseController;
use App\Http\Controllers\Api\V1\IMMO\HouseTypeController;
use App\Http\Controllers\Api\V1\IMMO\ImmoAccountController;
use App\Http\Controllers\Api\V1\IMMO\LocataireController;
use App\Http\Controllers\Api\V1\IMMO\LocationController;
use App\Http\Controllers\Api\V1\IMMO\LocationTypeController;
use App\Http\Controllers\Api\V1\IMMO\PaiementModuleController;
use App\Http\Controllers\Api\V1\IMMO\PaiementStatusController;
use App\Http\Controllers\Api\V1\IMMO\PaiementTypeController;
use App\Http\Controllers\Api\V1\IMMO\PayementController;
use App\Http\Controllers\Api\V1\IMMO\ProprietorController;
use App\Http\Controllers\Api\V1\IMMO\QuarterController;
use App\Http\Controllers\Api\V1\IMMO\RoomController;
use App\Http\Controllers\Api\V1\IMMO\RoomNatureController as IMMORoomNatureController;
use App\Http\Controllers\Api\V1\IMMO\RoomTypeController;
use App\Http\Controllers\Api\V1\IMMO\ZoneController;
use App\Http\Controllers\Api\V1\IMMO\FactureController;
use App\Http\Controllers\Api\V1\IMMO\HouseStopStateController;
use App\Http\Controllers\Api\V1\IMMO\ManageAccountController;
use App\Http\Controllers\Api\V1\IMMO\PaiementInitiationController as IMMOPaiementInitiationController;
use App\Http\Controllers\Api\V1\IMMO\PaiementInitiationStatusController;
use App\Http\Controllers\Api\V1\MemberController;

use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\OrganisationController;
use App\Http\Controllers\Api\V1\TeamController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\TicketStatusController;

use App\Http\Controllers\Api\V1\STOCK\ProductController;
use App\Http\Controllers\Api\V1\STOCK\ProductCategoryController;
use App\Http\Controllers\Api\V1\STOCK\ProductTypeController;
use App\Http\Controllers\Api\V1\STOCK\EtiquetteController;
use App\Http\Controllers\Api\V1\STOCK\LogistiqueController;
use App\Http\Controllers\Api\V1\STOCK\MarketeurController;
use App\Http\Controllers\Api\V1\STOCK\ProductStockController;
use App\Http\Controllers\Api\V1\STOCK\ExploitationController;
use App\Http\Controllers\Api\V1\STOCK\ChargementController;

use App\Http\Controllers\Api\V1\MINISTERS\RepertoryController;
use App\Http\Controllers\Api\V1\ProfilController;
use App\Http\Controllers\Api\V1\RangController;
use App\Http\Controllers\Api\V1\RightController;
use App\Http\Controllers\Api\V1\RoleController;
use App\Http\Controllers\PaiementInitiationController;
use App\Models\LocationType;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
*/

Route::prefix('v1')->group(function () {
    ###========== PROFILS ROUTINGS ========###
    Route::controller(ProfilController::class)->group(function () {
        Route::prefix('profil')->group(function () {
            Route::any('add', 'CreateProfil'); #AJOUT DE PROFIL
            Route::any('all', 'Profils'); #RECUPERATION DE TOUT LES PROFILS
            Route::any('{id}/retrieve', 'RetrieveProfil'); #RECUPERATION D'UN PROFIL
            Route::any('{id}/update', 'UpdateProfil'); #MODIFICATION D'UN PROFIL
            Route::any('{id}/delete', 'DeleteProfil'); #SUPPRESSION D'UN PROFIL
        });
    });

    ###========== RANG ROUTINGS ========###
    Route::controller(RangController::class)->group(function () {
        Route::prefix('rang')->group(function () {
            Route::any('add', 'CreateRang'); #AJOUT DE RANG
            Route::any('all', 'Rangs'); #RECUPERATION DE TOUT LES RANGS
            Route::any('{id}/retrieve', 'RetrieveRang'); #RECUPERATION D'UN RANG
            Route::any('{id}/delete', 'DeleteRang'); #SUPPRESSION D'UN RANG
            Route::any('{id}/update', 'UpdateRang'); #MODIFICATION D'UN RANG'
        });
    });

    ###========== ACTION ROUTINGS ========###
    Route::controller(ActionController::class)->group(function () {
        Route::prefix('action')->group(function () {
            Route::any('add', 'CreateAction'); #AJOUT D'UNE ACTION'
            Route::any('all', 'Actions'); #GET ALL ACTIONS
            Route::any('{id}/retrieve', 'RetrieveAction'); #RECUPERATION D'UNE ACTION
            Route::any('{id}/delete', 'DeleteAction'); #SUPPRESSION D'UNE ACTION
            Route::any('{id}/update', 'UpdateAction'); #MODIFICATION D'UNE ACTION
        });
    });

    ###========== RIGHTS ROUTINGS ========###
    Route::controller(RightController::class)->group(function () {
        Route::prefix('right')->group(function () {
            Route::any('add', 'CreateRight'); #AJOUT D'UN DROIT'
            Route::any('all', 'Rights'); #GET ALL RIGHTS
            Route::any('{id}/retrieve', 'RetrieveRight'); #RECUPERATION D'UN DROIT
            Route::any('{id}/delete', 'DeleteRight'); #SUPPRESSION D'UN DROIT
        });
    });

    ###========== ROLES ROUTINGS ========###
    Route::controller(RoleController::class)->group(function () {
        Route::prefix('role')->group(function () {
            Route::any('add', 'CreateRole'); #AJOUT D'UN ROLE'
            Route::any('all', 'Roles'); #GET ALL ROLE
            Route::any('{id}/retrieve', 'RetrieveRole'); #RECUPERATION D'UN ROLE

            Route::any('attach-user', 'AttachRoleToUser'); #Attacher un droit au user 
            Route::any('desattach-user', 'DesAttachRoleToUser'); #Attacher un droit au user 
        });
    });

    ###========== USERs ROUTINGS ========###
    Route::controller(UserController::class)->group(function () {
        Route::prefix("user")->group(function () {
            Route::any('login', 'Login');
            Route::middleware(['auth:api'])->get('logout', 'Logout');
            Route::any('users', 'Users');
            Route::any('users/{id}', 'RetrieveUser');
            Route::any('{id}/password/update', 'UpdatePassword');
            Route::any('{id}/delete', 'DeleteUser');

            Route::any('{id}/archive', 'ArchiveAccount');
            Route::any('{id}/duplicate', 'DuplicatAccount');

            Route::any('password/demand_reinitialize', 'DemandReinitializePassword');
            Route::any('password/reinitialize', 'ReinitializePassword');

            Route::any('supervisors', 'GetAllSupervisors');

            Route::any('attach-user', 'AttachRightToUser'); #Attacher un droit au user 
            Route::any('desattach-user', 'DesAttachRightToUser'); #Attacher un droit au user 
        });
    });

    Route::any('authorization', [Authorization::class, 'Authorization'])->name('authorization');

    ######################## MODULE TICKETING ##############################
    Route::prefix("ticketing")->group(function () {
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

        ###========== TICKETING STATUS ROUTINGS ========###
        Route::prefix('tickeStatus')->group(function () {
            Route::controller(TicketStatusController::class)->group(function () {
                Route::any('all', 'Status');
                Route::any('{id}/retrieve', '_RetrieveStatus');
            });
        });

        ###========== TICKET ROUTINGS ========###
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
    ######################## FIN MODULE TICKETING ##############################

    ######################## MODULE STOCK ##############################
    Route::prefix("stock")->group(function () {
        Route::prefix('products')->group(function () {
            ###========== PRODUCT TYPE ROUTINGS ========###
            Route::prefix('type')->group(function () {
                Route::controller(ProductTypeController::class)->group(function () {
                    Route::any('all', 'ProductTypes'); #RECUPERATION DE TOUT LES TYPES DE PRODUIT
                    Route::any('{id}/retrieve', 'RetrieveProductType'); #RECUPERATION D'UN TYPE DE PRODUIT
                });
            });
            ###========== PRODUCT CATEGORY ROUTINGS ========###
            Route::prefix('category')->group(function () {
                Route::controller(ProductCategoryController::class)->group(function () {
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
    });
    ######################## FIN MODULE STOCK ##############################

    ######################## MODULE REPERTOIRE ##############################
    Route::prefix('repertory')->group(function () {
        Route::controller(RepertoryController::class)->group(function () {
            Route::any('add', 'AddRepertory');
            Route::any('import', 'ImportRepertorys'); #IMPORTER DES REPERTOIRES
            Route::any('export', 'ExportRepertorys'); #EXPORTER DES REPERTOIRES
            Route::any('all', 'Repertories');
            Route::any('{id}/retrieve', '_RetrieveRepertory');
            Route::any('{id}/update', '_UpdateRepertory');
            Route::any('{id}/delete', 'DeleteRepertory');
            Route::any('{id}/generate-qr', '_GenerateRepertoryQr');
            Route::any('{id}/generate-badge', '_GenerateRepertoryBadge');
        });
    });
    ######################## FIN MODULE REPERTOIRE ##############################

    ######################## MODULE CARTES CONSULAIRES ##############################
    Route::prefix('card')->group(function () {
        ##__MANDATURES
        Route::prefix("mandate")->group(function () {
            Route::controller(MandateController::class)->group(function () {
                Route::any('add', 'AddMandate');
                Route::any('all', 'Mandates');
                Route::any('{id}/retrieve', '_RetrieveMandate');
                Route::any('{id}/update', '_UpdateMandate');
                Route::any('{id}/delete', 'DeleteMandate');
            });

            // LES POSTES DANS UNE MANDATURE
            Route::prefix("poste")->group(function () {
                Route::controller(PosteController::class)->group(function () {
                    Route::any('all', 'Postes');
                    Route::any('{id}/retrieve', '_RetrievePoste');
                });
            });
        });

        ###___COMPANY
        Route::prefix("company")->group(function () {
            Route::controller(CompanyController::class)->group(function () {
                Route::any('add', 'AddCompany');
                Route::any('all', 'Companies');
                Route::any('{id}/retrieve', '_RetrieveCompany');
                Route::any('{id}/update', '_UpdateCompany');
                Route::any('{id}/delete', 'DeleteCompany');

                Route::any('import', 'ImportCompanies'); #IMPORTER DES ENTREPRISES
                Route::any('export', 'ExportCompanies'); #EXPORTER DES ENTREPRISES
            });

            // LES FONCTIONS DANS UNE ENTREPRISE
            Route::prefix("fonction")->group(function () {
                Route::controller(FonctionController::class)->group(function () {
                    Route::any('all', 'Fonctions');
                    Route::any('{id}/retrieve', '_RetrieveFonction');
                });
            });
        });

        ##___ELUS CONSULAIRES
        Route::prefix("elected_consular")->group(function () {
            Route::controller(ElectedConsularController::class)->group(function () {
                Route::any('add', 'AddConsular');
                Route::any('all', 'Consulars');
                Route::any('{id}/retrieve', '_RetrieveConsular');
                Route::any('{id}/update', '_UpdateConsular');
                Route::any('{id}/delete', 'DeleteConsular');
                Route::any('{id}/affect-to-company', 'AffectToCompany');
                Route::any('{id}/affect-to-poste', 'AffectToPoste');

                Route::any('import', 'ImportElectedConsulars'); #IMPORTER DES ELUS ELUS CONSULAIRES
                Route::any('export', 'ExportElectedConsulars'); #EXPORTER DES ELUS ELUS CONSULAIRES
            });
        });

        ###___GESTION DES CARTES PROPREMENT DITES
        Route::prefix("manage_card")->group(function () {
            Route::controller(CardController::class)->group(function () {
                Route::any('elected_consular/{consular}/generate-card', 'GenerateCard');
                Route::any('all', 'Cards');
                Route::any('{id}/retrieve', 'RetrieveCard');
                Route::any('{id}/update', 'UpdateCard');
                Route::any('{id}/delete', 'DeleteCard');
            });
        });
    });
    ######################## FIN MODULE CARTES CONSULAIRES ##############################

    ######################## MODULE IMMO ##############################
    Route::prefix('immo')->group(function () {
        ###========== COUNTRY ========###
        Route::prefix("country")->group(function () {
            Route::controller(CountryController::class)->group(function () {
                Route::any('all', 'Countries'); #RECUPERATION DE TOUT LES PAYS
                Route::any('{id}/retrieve', 'RetrieveCountrie'); #RECUPERATION D'UN PAYS
            });
        });

        ###========== DOMAIN ACTIVITY ========###
        Route::prefix("activity_domain")->group(function () {
            Route::controller(ActivityDomainController::class)->group(function () {
                Route::any('all', 'ActivityDomains'); #RECUPERATION DE TOUT LES DOMAINES D'ACTIVITE
                Route::any('{id}/retrieve', 'RetrieveActivityDomain'); #RECUPERATION D'UN DOMAINE D'ACTIVITE
            });
        });

        ###========== CITY ========###
        Route::prefix("city")->group(function () {
            Route::controller(CityController::class)->group(function () {
                Route::any('all', 'Cities'); #RECUPERATION DE TOUTES LES VILLES
                Route::any('{id}/retrieve', '_RetrieveCity'); #RECUPERATION D'UNE VILLE
            });
        });
        ##___

        ###========== AREA ========###
        Route::prefix("area")->group(function () {
            Route::controller(AreaControlller::class)->group(function () {
                Route::any('all', 'Areas'); #RECUPERATION D'UN TERRITOIRE
                Route::any('{id}/retrieve', '_RetrieveArea'); #RECUPERATION D'UN TERRITOIRE 
            });
        });
        ##___

        ###========== CURRENCY ========###
        Route::prefix("currency")->group(function () {
            Route::controller(CurrencyController::class)->group(function () {
                Route::any('all', 'Currencies'); #RECUPERATION DE TOUTES LES DEVISES
                Route::any('{id}/retrieve', '_RetrieveCurrency'); #RECUPERATION D'UNE DEVISE
            });
        });
        ##___

        ###========== TYPES DE COMPTEUR ========###
        Route::prefix("counterType")->group(function () {
            Route::controller(CounterTypeController::class)->group(function () {
                Route::any('all', 'CounterTypes'); #RECUPERATION DE TOUT LES TYPES DE COMPTEUR
                Route::any('{id}/retrieve', '_RetrieveCounterType'); #RECUPERATION D'UN TYPE DE COMPTEUR
            });
        });
        ##___

        ###========== STATUS DE COMPTEUR ======== ###
        Route::prefix("counterStatus")->group(function () {
            Route::controller(CounterStatusController::class)->group(function () {
                Route::any('all', 'CounterStatus'); ## RECUPERATION DE TOUT LES STATUS DE COMPTEUR
                Route::any('{id}/retrieve', '_RetrieveCounterStatus'); ## RECUPERATION D'UN STATUS DE COMPTEUR
            });
        });
        ##___

        ###========== DEPARTEMENTS ======== ###
        Route::prefix("departement")->group(function () {
            Route::controller(DepartementController::class)->group(function () {
                Route::any('all', 'Departements'); ## RECUPERATION DE TOUT LES DEPARTEMENTS
                Route::any('{id}/retrieve', '_RetrieveDepartement'); ## RECUPERATION D'UN DEPARTEMENT
            });
        });
        ##___

        ###========== ZONES ======== ###
        Route::prefix("zone")->group(function () {
            Route::controller(ZoneController::class)->group(function () {
                Route::any('all', 'Zones'); ## RECUPERATION DE TOUTES LES ZONES
                Route::any('{id}/retrieve', '_RetrieveZone'); ## RECUPERATION D'UNE ZONE
            });
        });
        ##___

        ###========== QUARTIERS ======== ###
        Route::prefix("quarter")->group(function () {
            Route::controller(QuarterController::class)->group(function () {
                Route::any('all', 'Quarters'); ## RECUPERATION DE TOUT LES QUARTIERS
                Route::any('{id}/retrieve', '_RetrieveQuarter'); ## RECUPERATION D'UN QUARTIER
            });
        });
        ##___

        ###========== ACCOUNT ======== ###
        Route::prefix("account")->group(function () {
            Route::controller(ImmoAccountController::class)->group(function () {
                Route::any('all', 'Accounts'); ## RECUPERATION DE TOUT LES COMPTES
                Route::any('{id}/retrieve', '_RetrieveAccount'); ## RECUPERATION D'UN COMPTE
            });


            ##__ACCOUNT_SOLD MANAGEMENT
            Route::prefix("sold")->group(function () {
                Route::controller(ManageAccountController::class)->group(function () {
                    Route::any('{accountId}/creditate', '_CreditateAccount'); ## CREDITATION DU SOLDE D'UN COMPTE
                    Route::any('{accountId}/getSolds', '_GetAccountSolds'); ## RECUPERATION DES SOLDES D'UN COMPTE
                    Route::any('{id}/retrieve', 'RetrieveSolde'); ## RECUPERATION D'UN SOLDE
                    Route::any('all', 'GetAllSoldes'); ## RECUPERATION DE TOUT LES SOLDES
                });
            });
        });
        ##___


        ##========__PAIEMENT INITIATION MANAGEMENT======
        Route::prefix("payement_initiation")->group(function () {
            Route::prefix("status")->group(function () {
                Route::controller(PaiementInitiationStatusController::class)->group(function () {
                    Route::any('all', 'PaiementInitiationStatus'); ## RECUPERATION DE TOUT LES STATUS D'INITIATION DE PAYEMENT
                    Route::any('{id}/retrieve', '_RetrievePaiementInitiationStatus'); ## RECUPERATION D'UN STATUS D'INITIATION DE PAYEMENT
                });
            });

            Route::controller(IMMOPaiementInitiationController::class)->group(function () {
                Route::any('initiateToProprio', 'InitiatePaiementToProprietor'); ## INITIER UN PAIEMENT A UN PROPRIETAIRE
                Route::any('all', 'PaiementInitiations'); ## RECUPERATION DES INITIATIONS DE PAIEMENTS
                Route::any('{id}/retrieve', 'RetrievePaiementInitiation'); ## RECUPERATION D'UNE INITIATION DE PAIEMENT
                Route::any('{id}/valide', 'ValidePaiementInitiation'); ## MODIFICATION D'UNE INITIATION DE PAIUEMENT
            });
        });

        ###========== PROPRIETAIRE ========###
        Route::prefix("proprietor")->group(function () {
            Route::controller(ProprietorController::class)->group(function () {
                Route::any('add', '_AddProprietor'); #AJOUT D'UN PROPRIETAIRE
                Route::any('all', 'Proprietors'); #RECUPERATION DE TOUT LES PROPRIETAIRES
                Route::any('{id}/retrieve', 'RetrieveProprietor'); #RECUPERATION D'UN PROPRIETAIRE
                Route::any('{id}/update', 'UpdateProprietor'); # MODIFICATION D'UN PROPRIETAIRE 
                Route::any('{id}/delete', 'DeleteProprietor'); # SUPPRESSION D'UN PROPRIETAIRE  
            });
        });
        ##___

        ###========== HOUSE ========###
        Route::prefix("house")->group(function () {
            Route::prefix("type")->group(function () {
                Route::controller(HouseTypeController::class)->group(function () {
                    Route::any('all', 'HouseTypes'); #RECUPERATION DE TOUT LES TYPES DE MAISONS
                    Route::any('{id}/retrieve', '_RetrieveHouseType'); #RECUPERATION D'UN TYPE DE MAISON
                });
            });

            Route::controller(HouseController::class)->group(function () {
                Route::any('add', '_AddHouse'); #AJOUT D'UNE MAISON
                Route::any('all', 'Houses'); #RECUPERATION DES MAISONS
                Route::any('{id}/retrieve', 'RetrieveHouse'); #RECUPERATION D'UNE MAISON
                Route::any('{id}/update', 'UpdateHouse'); # MODIFICATION D'UNE MAISON  
                Route::any('{id}/delete', 'DeleteHouse'); # SUPPRESSION D'UNE MAISON  
            });
        });
        ##___

        ##=========__ ARRETER LES ETATS DES MAISON ======
        Route::prefix("house_state")->group(function () {
            Route::controller(HouseStopStateController::class)->group(function () {
                Route::any('stop', '_StopStatsOfHouse');
                Route::any('house/{houseId}/all', 'RetrieveHouseStates');
                Route::any('{id}/retrieve', 'RetrieveState');
                Route::any('all', 'GetAllStates');
            });
        });

        ###========== ROOM ========###
        Route::prefix("room")->group(function () {
            Route::prefix("type")->group(function () {
                Route::controller(RoomTypeController::class)->group(function () {
                    Route::any('all', 'RoomTypes'); #RECUPERATION DE TOUT LES TYPES DE CHAMBRES
                    Route::any('{id}/retrieve', '_RetrieveRoomType'); #RECUPERATION D'UN TYPE DE CHAMBRE
                });
            });

            Route::prefix("nature")->group(function () {
                Route::controller(IMMORoomNatureController::class)->group(function () {
                    Route::any('all', 'RoomNatures'); #RECUPERATION DE TOUTES LES NATURES DE CHAMBRES
                    Route::any('{id}/retrieve', '_RetrieveRoomNature'); #RECUPERATION D'UNE NATURE DE CHAMBRE
                });
            });

            Route::controller(RoomController::class)->group(function () {
                Route::any('add', '_AddRoom'); #AJOUT D'UNE CHAMBRE
                Route::any('all', 'Rooms'); #RECUPERATION D'UNE CHAMBRE
                Route::any('{id}/retrieve', 'RetrieveRoom'); #RECUPERATION D'UNE CHAMBRE
                Route::any('{id}/update', 'UpdateRoom'); #RECUPERATION D'UNE CHAMBRE 
                Route::any('{id}/delete', 'DeleteRoom'); #SUPPRESSION D'UNE CHAMBRE 
            });
        });
        ##___

        ###========== LOCATAIRE ========###
        Route::prefix("locataire")->group(function () {
            Route::controller(LocataireController::class)->group(function () {
                Route::any('add', '_AddLocataire'); #AJOUT D'UN LOCATAIRE
                Route::any('all', 'Locataires'); #RECUPERATION D'UN LOCATAIRE
                Route::any('{id}/retrieve', 'RetrieveLocataire'); #RECUPERATION D'UN LOCATAIRE
                Route::any('{id}/update', 'UpdateLocataire'); #RECUPERATION D'UN LOCATAIRE 
                Route::any('{id}/delete', 'DeleteLocataire'); #SUPPRESSION D'UN LOCATAIRE
            });
        });
        ##___

        ###========== LOCATION ========###
        Route::prefix("location")->group(function () {
            Route::prefix("type")->group(function () {
                Route::controller(LocationTypeController::class)->group(function () {
                    Route::any('all', 'LocationTypes'); #RECUPERATION DE TOUT LES TYPES DE LOCATIONS
                    Route::any('{id}/retrieve', '_RetrieveLocationType'); #RECUPERATION D'UN TYPE DE LOCATION
                });
            });

            Route::controller(LocationController::class)->group(function () {
                Route::any('add', '_AddLocation'); #AJOUT D'UNE LOCATION
                Route::any('all', 'Locations'); #RECUPERATION DE TOUTES LES LOCATIONS
                Route::any('{id}/retrieve', 'RetrieveLocation'); #RECUPERATION D'UNE LOCATION
                Route::any('{id}/update', 'UpdateLocation'); #RECUPERATION D'UNE LOCATION
                Route::any('{id}/delete', 'DeleteLocation'); #SUPPRESSION D'UNE LOCATION 

                Route::any('{id}/demenage', 'DemenageLocation'); #DEMENAGEMENT D'UNE LOCATION 
            });

            Route::controller(LocationController::class)->group(function () {
                Route::any("generate_cautions", "_ManageCautions"); #GENERATE HOUSE CAUTION 
            });
        });
        ##___

        ###========== CLIENT ========###
        Route::prefix("client")->group(function () {
            Route::prefix("type")->group(function () {
                Route::controller(ClientTypeController::class)->group(function () {
                    Route::any('all', 'ClientTypes'); #RECUPERATION DE TOUT LES TYPES DE CLIENTS
                    Route::any('{id}/retrieve', '_RetrieveClientType'); #RECUPERATION D'UN TYPE DE CLIENTS
                });
            });

            Route::controller(ClientController::class)->group(function () {
                Route::any('all', 'Clients'); #RECUPERATION DES CLIENTS
                Route::any('{id}/retrieve', 'RetrieveClient'); #RECUPERATION D'UN CLIENT
                Route::any('{id}/delete', 'DeleteClient'); # SUPPRESSION D'UN CLIENT
            });
        });
        ##___

        ###========== PAIEMENT ========###
        Route::prefix("paiement")->group(function () {
            Route::prefix("type")->group(function () {
                Route::controller(PaiementTypeController::class)->group(function () {
                    Route::any('all', 'PaiementTypes'); #RECUPERATION DE TOUT LES TYPES DE PAIEMENT
                    Route::any('{id}/retrieve', '_RetrievePaiementType'); #RECUPERATION D'UN TYPE DE PAIEMENT
                });
            });

            Route::prefix("status")->group(function () {
                Route::controller(PaiementStatusController::class)->group(function () {
                    Route::any('all', 'PaiementStatus'); #RECUPERATION DE TOUT LES STATUS DE PAIEMENT
                    Route::any('{id}/retrieve', '_RetrievePaiementStatus'); #RECUPERATION D'UN STATU DE PAIEMENT
                });
            });

            Route::prefix("module")->group(function () {
                Route::controller(PaiementModuleController::class)->group(function () {
                    Route::any('all', 'PaiementModules'); #RECUPERATION DE TOUT LES MODULES DE PAIEMENT
                    Route::any('{id}/retrieve', '_RetrievePaiementModule'); #RECUPERATION D'UN MODULE DE PAIEMENT
                });
            });

            Route::controller(PayementController::class)->group(function () {
                Route::any('add', '_AddPaiement'); #AJOUT D'UN PAIEMENT
                Route::any('all', 'Paiements'); #RECUPERATION DE TOUT LES PAIEMENTS
                Route::any('{id}/retrieve', 'RetrievePaiement'); #RECUPERATION D'UN PAIEMENT
                Route::any('{id}/update', 'UpdatePaiement'); #RECUPERATION D'UN PAIEMENT

                ###___FILTRE
                Route::any('filtre_by_date', '_FiltreByDate'); #FILTRER PAR DATE
                Route::any('{houseId}/filtre_after_stateDate_stoped', 'FiltreAfterStateDateStoped'); #FILTRER LES PAIEMENTS APRES ARRET DES ETATS
            });
        });
        ##___

        ###========== FACTURE ========###
        Route::prefix("facture")->group(function () {
            Route::prefix("type")->group(function () {
                Route::controller(FactureTypeController::class)->group(function () {
                    Route::any('all', 'FactureTypes'); #RECUPERATION DE TOUT LES TYPES DE FACTURE
                    Route::any('{id}/retrieve', '_RetrieveFactureType'); #RECUPERATION D'UN TYPE DE FACTURE
                });
            });

            Route::prefix("status")->group(function () {
                Route::controller(FactureStatusController::class)->group(function () {
                    Route::any('all', 'FactureStatus'); #RECUPERATION DE TOUT LES STATUS DE FACTURE
                    Route::any('{id}/retrieve', '_RetrieveFactureStatus'); #RECUPERATION D'UN STATU DE FACTURE
                });
            });

            Route::controller(FactureController::class)->group(function () {
                Route::any('all', 'Factures'); #RECUPERATION DE TOUTES LES FACTURES
                Route::any('{id}/retrieve', 'RetrieveFacture'); #RECUPERATION D'UNE FACTURE
            });
        });
        ##___
    });
    ######################## FIN MODULE IMMO ##############################
});
