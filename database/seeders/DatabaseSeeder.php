<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        #======== CREATION DES ACTIONS PAR DEFAUT=========#
        $actions = [
            #####new actions
            [
                'name' => "list_contact",
                'description' => "Lister les contacts",
                'visible' => true
            ],
            [
                'name' => "add_contact",
                'description' => "Ajouter un contact",
                'visible' => true
            ],
            [
                'name' => "update_contact",
                'description' => "Mettre à jour un contact",
                'visible' => true
            ],
            [
                'name' => "delete_contact",
                'description' => "Supprimer un contact",
                'visible' => true
            ],
            [
                'name' => "view_contact",
                'description' => "Détail d'un contact",
                'visible' => true
            ],
            [
                'name' => "list_contactGroup",
                'description' => "Lister les groupe de cintact",
                'visible' => true
            ],
            [
                'name' => "add_contactGroup",
                'description' => "Ajouter un groupe de cintact",
                'visible' => true
            ],
            [
                'name' => "update_contactGroup",
                'description' => "Mettre à jour un groupe de cintact",
                'visible' => true
            ],
            [
                'name' => "delete_contactGroup",
                'description' => "Supprimer un groupe de cintact",
                'visible' => true
            ],
            [
                'name' => "view_contactGroup",
                'description' => "Détail d'un groupe de contact",
                'visible' => true
            ],
            [
                'name' => "list_expeditor",
                'description' => "Lister les expeditors",
                'visible' => true
            ],
            [
                'name' => "add_expeditor",
                'description' => "Ajouter un expeditor",
                'visible' => true
            ],
            [
                'name' => "update_expeditor",
                'description' => "Mettre à jour un expeditor",
                'visible' => true
            ],
            [
                'name' => "delete_expeditor",
                'description' => "Supprimer un expeditor",
                'visible' => true
            ],
            [
                'name' => "view_expeditor",
                'description' => "Détail d'un expeditor",
                'visible' => true
            ],
            [
                'name' => "list_sms",
                'description' => "Lister les sms",
                'visible' => true
            ],
            [
                'name' => "add_sms",
                'description' => "Ajouter un sms",
                'visible' => true
            ],
            [
                'name' => "update_sms",
                'description' => "Mettre à jour un sms",
                'visible' => true
            ],
            [
                'name' => "delete_sms",
                'description' => "Supprimer un sms",
                'visible' => true
            ],
            [
                'name' => "view_sms",
                'description' => "Détail d'un sms",
                'visible' => true
            ],
            [
                'name' => "list_campaign",
                'description' => "Lister les campagnes",
                'visible' => true
            ],
            [
                'name' => "add_campaign",
                'description' => "Ajouter une campagne",
                'visible' => true
            ],
            [
                'name' => "update_campaign",
                'description' => "Mettre à jour une campagne",
                'visible' => true
            ],
            [
                'name' => "delete_campaign",
                'description' => "Supprimer une campagne",
                'visible' => true
            ],
            [
                'name' => "stop_campaign",
                'description' => "Stoper une campagne",
                'visible' => true
            ],
            [
                'name' => "initiate_campaign",
                'description' => "Initier une campagne",
                'visible' => true
            ],
            [
                'name' => "view_campaign",
                'description' => "Détail d'une campagne",
                'visible' => true
            ],
            [
                'name' => "list_user",
                'description' => "Lister les users",
                'visible' => true
            ],
            [
                'name' => "update_user",
                'description' => "Mettre à jour un user",
                'visible' => true
            ],
            [
                'name' => "delete_user",
                'description' => "Supprimer un user",
                'visible' => true
            ],
            [
                'name' => "view_user",
                'description' => "Détail d'un user",
                'visible' => true
            ],
            [
                'name' => "list_right",
                'description' => "Lister les rights",
                'visible' => true
            ],
            [
                'name' => "add_right",
                'description' => "Ajouter un right",
                'visible' => true
            ],
            [
                'name' => "update_right",
                'description' => "Mettre à jour un right",
                'visible' => true
            ],
            [
                'name' => "delete_right",
                'description' => "Supprimer un right",
                'visible' => true
            ],
            [
                'name' => "view_right",
                'description' => "Détail d'un right",
                'visible' => true
            ],
            [
                'name' => "list_profil",
                'description' => "Lister les profils",
                'visible' => true
            ],
            [
                'name' => "add_profil",
                'description' => "Ajouter un profil",
                'visible' => true
            ],
            [
                'name' => "update_profil",
                'description' => "Mettre à jour un profil",
                'visible' => true
            ],
            [
                'name' => "delete_profil",
                'description' => "Supprimer un profil",
                'visible' => true
            ],
            [
                'name' => "view_profil",
                'description' => "Détail d'un profil",
                'visible' => true
            ],
            [
                'name' => "list_rang",
                'description' => "Lister les rangs",
                'visible' => true
            ],
            [
                'name' => "add_rang",
                'description' => "Ajouter un rang",
                'visible' => true
            ],
            [
                'name' => "update_rang",
                'description' => "Mettre à jour un rang",
                'visible' => true
            ],
            [
                'name' => "delete_rang",
                'description' => "Supprimer un rang",
                'visible' => true
            ],
            [
                'name' => "view_rang",
                'description' => "Détail d'un rang",
                'visible' => true
            ],
            [
                'name' => "list_action",
                'description' => "Lister les action",
                'visible' => true
            ],
            [
                'name' => "add_action",
                'description' => "Ajouter un action",
                'visible' => true
            ],
            [
                'name' => "update_action",
                'description' => "Mettre à jour un action",
                'visible' => true
            ],
            [
                'name' => "delete_action",
                'description' => "Supprimer un action",
                'visible' => true
            ],
            [
                'name' => "view_action",
                'description' => "Détail d'une action",
                'visible' => true
            ],
            [
                'name' => "affect_right",
                'description' => "Affecter un droit",
                'visible' => true
            ],

            [
                'name' => "desattach_right",
                'description' => "Retirer un droit à un utilisateur",
                'visible' => true
            ],

            [
                'name' => "credit_sold",
                'description' => "Crediter un compte",
                'visible' => true
            ],

            ####old actions
            [
                'name' => 'add_user',
                'description' => 'Ajout d\'utilisateur',
                'visible' => true
            ],
            [
                'name' => 'global_stats',
                'description' => "Statistique globale de la plateforme : Nombre de distributeurs, cartes, agents commerciaux, etc.",
                'visible' => true
            ],
            [
                'name' => 'list_agency',
                'description' => 'Liste des distributeurs',
                'visible' => true
            ],
            [
                'name' => 'update_agency',
                'description' => 'Editer distribibuteur',
                'visible' => true
            ],
            [
                'name' => 'send_msg_to_distributor',
                'description' => 'Envoyer de message aux distributeur',
                'visible' => true
            ],
            [
                'name' => 'delete_agency',
                'description' => 'Supprimer distributeur',
                'visible' => true
            ],
            [
                'name' => 'add_user_right',
                'description' => 'Ajout de droit',
                'visible' => true
            ],
            [
                'name' => 'admin',
                'description' => 'Administration',
                'visible' => true
            ],
            [
                'name' => 'activate_card',
                'description' => 'Activation de carte',
                'visible' => true
            ],
            [
                'name' => 'admin_agency',
                'description' => 'Administration pour distributeur',
                'visible' => true
            ],
            [
                'name' => 'recharge_card',
                'description' => 'recharge de compte',
                'visible' => true
            ],
            [
                'name' => 'add_card',
                'description' => 'Ajout de carte',
                'visible' => true
            ],
            [
                'name' => 'add_agency',
                'description' => 'Ajouter distributeur',
                'visible' => true
            ],
            [
                'name' => 'add_pos',
                'description' => 'Ajouter Point de Service, agence pour les distributeur',
                'visible' => true
            ],
            [
                'name' => 'list_pos',
                'description' => 'Voir la liste des points de vente',
                'visible' => true
            ],
            [
                'name' => 'list_card',
                'description' => 'Lister les cartes',
                'visible' => true
            ],
            [
                'name' => 'add_agency',
                'description' => 'Ajouter une agence',
                'visible' => true
            ],
            [
                'name' => 'credit_agency',
                'description' => 'Créditer une agence',
                'visible' => true
            ],
            [
                'name' => 'add_card',
                'description' => 'Ajouter une carte',
                'visible' => true
            ],
            [
                'name' => 'list_agent',
                'description' => 'Lister des agents commerciaux',
                'visible' => true
            ],
            [
                'name' => 'add_agent',
                'description' => 'Ajouter agent commercial',
                'visible' => true
            ],
            [
                'name' => 'list_rechargement',
                'description' => 'Lister les rechargements',
                'visible' => true
            ],
            [
                'name' => 'validate_card_load',
                'description' => 'Valider rechargement de carte',
                'visible' => true
            ],
            [
                'name' => 'list_master',
                'description' => 'Lister des masters',
                'visible' => true
            ],
            [
                'name' => 'add_master',
                'description' => 'Ajouter des masters',
                'visible' => true
            ],
            [
                'name' => 'update_card',
                'description' => 'Ajouter des masters',
                'visible' => true
            ],
            [
                'name' => 'credit_my_account',
                'description' => 'Créditer mon compte',
                'visible' => true
            ],
            [
                'name' => 'add_card',
                'description' => 'Ajouter une carte',
                'visible' => true
            ],
            [
                'name' => 'debit_agency',
                'description' => 'Débiter une agence',
                'visible' => true
            ],
            [
                'name' => 'delete_card',
                'description' => 'Supprimer carte',
                'visible' => true
            ],
            [
                'name' => 'stats',
                'description' => 'Statistiques',
                'visible' => true
            ],
            [
                'name' => 'canal_renew',
                'description' => 'Ajouter renouvellement',
                'visible' => true
            ],
            [
                'name' => 'canal_validate_renew',
                'description' => 'Valider réabonnement',
                'visible' => true
            ],
            [
                'name' => 'add_decodeur',
                'description' => 'Ajouter décodeur',
                'visible' => true
            ],
            [
                'name' => 'credit_decodeur',
                'description' => 'Créditer le stock de décodeur pour un partenaire',
                'visible' => true
            ],
            [
                'name' => 'sell_decodeur',
                'description' => 'Vendre décodeur',
                'visible' => true
            ],
            [
                'name' => 'migrate_decodeur',
                'description' => 'Faire la migration de décodeur',
                'visible' => true
            ],
            [
                'name' => 'canal_validate_enroll',
                'description' => 'Valider les recrutements (vente de décodeur)',
                'visible' => true
            ],
            [
                'name' => 'debit_decodeur',
                'description' => 'Débiter décodeur',
                'visible' => true
            ],
            [
                'name' => 'canal_validate_migration',
                'description' => 'Valider les recrutements (vente de décodeur)',
                'visible' => true
            ],
            [
                'name' => 'list_decodeur',
                'description' => 'Liste décodeurs (recrutement)',
                'visible' => true
            ],
            [
                'name' => 'canal_renew',
                'description' => 'Réabonnement',
                'visible' => true
            ],
            [
                'name' => 'sell_decodeur',
                'description' => 'Recrutement (vente de décodeur)',
                'visible' => true
            ],
            [
                'name' => 'migrate_decodeur',
                'description' => 'Migration de décodeur',
                'visible' => true
            ],
            [
                'name' => 'credit_accessoires',
                'description' => 'Créditer accessoires',
                'visible' => true
            ],
            [
                'name' => 'credit_parabole',
                'description' => 'Créditer parabole',
                'visible' => true
            ],
            [
                'name' => 'debit_accessoires',
                'description' => 'Débiter accessoires',
                'visible' => true
            ],
            [
                'name' => 'end_operation',
                'description' => 'Finir une Opération',
                'visible' => true
            ],
            [
                'name' => 'canal_update',
                'description' => 'Modification abonnement canal',
                'visible' => true
            ],
            [
                'name' => 'canal_enroll',
                'description' => 'Recrutement canal',
                'visible' => true
            ],
            [
                'name' => 'list_enroll',
                'description' => 'Liste des recrutements',
                'visible' => true
            ],
            [
                'name' => 'credit_materiel',
                'description' => 'Créditer un matériel',
                'visible' => true
            ],
            [
                'name' => 'list_migration',
                'description' => 'Liste des miigration',
                'visible' => true
            ],
            [
                'name' => 'canal_migration',
                'description' => 'Faire des migrations',
                'visible' => true
            ],
            [
                'name' => 'add_stock',
                'description' => 'Ajouter stock',
                'visible' => true
            ],
            [
                'name' => 'list_renew',
                'description' => 'Liste des reabonnements',
                'visible' => true
            ],
            [
                'name' => 'list_reactivation',
                'description' => 'Lister les réactivations',
                'visible' => true
            ],
            [
                'name' => 'canal_reactivation',
                'description' => 'Réactivation',
                'visible' => true
            ],
            [
                'name' => 'delete_user_right',
                'description' => 'Retirer droit à un utilisateur',
                'visible' => true
            ],
            [
                'name' => 'deliver_card',
                'description' => 'Délivrer une carte',
                'visible' => true
            ],
            [
                'name' => 'card_validate_activation',
                'description' => 'Valider activation de carte',
                'visible' => true
            ],
            [
                'name' => 'deepsearch',
                'description' => 'Recherche approfondie',
                'visible' => true
            ],
            [
                'name' => 'list_deepsearch',
                'description' => 'Liste recherches approfondies',
                'visible' => true
            ],
            [
                'name' => 'set_deepsearch',
                'description' => 'Répondre recherches approfondies',
                'visible' => true
            ],
            [
                'name' => 'see_commission',
                'description' => 'Voir commission',
                'visible' => true
            ],
            [
                'name' => 'see_balance',
                'description' => 'Voir solde',
                'visible' => true
            ],
            [
                'name' => 'reset_user_pass',
                'description' => 'Réinitialiser mot de passe',
                'visible' => true
            ],
            [
                'name' => 'list_deposit',
                'description' => 'Liste des dépôts',
                'visible' => true
            ],
            [
                'name' => 'add_deposit',
                'description' => 'Ajouter des dépôts',
                'visible' => true
            ],
            [
                'name' => 'set_deposit',
                'description' => 'Valider des dépôts',
                'visible' => true
            ],
            [
                'name' => 'view_statement',
                'description' => 'Voir relevé de compte',
                'visible' => true
            ],
            [
                'name' => 'assurance_new',
                'description' => 'Ajouter assurance',
                'visible' => true
            ],
            [
                'name' => 'list_assurance',
                'description' => 'Lister assurance',
                'visible' => true
            ],
            [
                'name' => 'process_assurance',
                'description' => 'Dévis assurance',
                'visible' => true
            ],
            [
                'name' => 'approve_assurance',
                'description' => 'Approuver devis',
                'visible' => true
            ],
            [
                'name' => 'list_assurance',
                'description' => 'Liste assurance',
                'visible' => true
            ],
            [
                'name' => 'authorize_commission_withdrawal',
                'description' => 'Autoriser reversement de commission',
                'visible' => true
            ],
            [
                'name' => 'list_cardload',
                'description' => 'Liste rechargement carte',
                'visible' => true
            ],
            [
                'name' => 'facture_new',
                'description' => 'Emettre des factures',
                'visible' => true
            ],
            [
                'name' => 'list_facture',
                'description' => 'Liste des factures',
                'visible' => true
            ],
            [
                'name' => 'validate_facture',
                'description' => 'Valider des factures',
                'visible' => true
            ],
            [
                'name' => "list_master",
                'description' => "Lister les masters",
                'visible' => true
            ],
            [
                'name' => "add_master",
                'description' => "Ajouter un master",
                'visible' => true
            ],
            [
                'name' => "update_master",
                'description' => "Mettre à jour un master",
                'visible' => true
            ],
            [
                'name' => "delete_master",
                'description' => "Supprimer un master",
                'visible' => true
            ],
            [
                'name' => "list_agency",
                'description' => "Lister les agencies",
                'visible' => true
            ],
            [
                'name' => "add_agency",
                'description' => "Ajouter un agency",
                'visible' => true
            ],
            [
                'name' => "update_agency",
                'description' => "Mettre à jour un agency",
                'visible' => true
            ],
            [
                'name' => "delete_agency",
                'description' => "Supprimer un agency",
                'visible' => true
            ],
            [
                'name' => "list_agent",
                'description' => "Lister les agents",
                'visible' => true
            ],
            [
                'name' => "add_agent",
                'description' => "Ajouter un agent",
                'visible' => true
            ],
            [
                'name' => "update_agent",
                'description' => "Mettre à jour un agent",
                'visible' => true
            ],
            [
                'name' => "delete_agent",
                'description' => "Supprimer un agent",
                'visible' => true
            ],
            [
                'name' => "list_pos",
                'description' => "Lister les pos",
                'visible' => true
            ],
            [
                'name' => "add_pos",
                'description' => "Ajouter un pos",
                'visible' => true
            ],
            [
                'name' => "update_pos",
                'description' => "Mettre à jour un pos",
                'visible' => true
            ],
            [
                'name' => "delete_pos",
                'description' => "Supprimer un pos",
                'visible' => true
            ],
            [
                'name' => "list_table",
                'description' => "Lister les tables",
                'visible' => true
            ],
            [
                'name' => "add_table",
                'description' => "Ajouter une table",
                'visible' => true
            ],
            [
                'name' => "update_table",
                'description' => "Mettre à jour une table",
                'visible' => true
            ],
            [
                'name' => "delete_table",
                'description' => "Supprimer une table",
                'visible' => true
            ],
            [
                'name' => "list_product",
                'description' => "Lister les products",
                'visible' => true
            ],
            [
                'name' => "add_product",
                'description' => "Ajouter un product",
                'visible' => true
            ],
            [
                'name' => "update_product",
                'description' => "Mettre à jour un product",
                'visible' => true
            ],
            [
                'name' => "delete_product",
                'description' => "Supprimer un product",
                'visible' => true
            ],
            [
                'name' => "list_order",
                'description' => "Lister les orders",
                'visible' => true
            ],
            [
                'name' => "add_order",
                'description' => "Ajouter un order",
                'visible' => true
            ],
            [
                'name' => "update_order",
                'description' => "Mettre à jour un order",
                'visible' => true
            ],
            [
                'name' => "delete_order",
                'description' => "Supprimer un order",
                'visible' => true
            ],
            [
                'name' => "list_product_category",
                'description' => "Lister les product_categories",
                'visible' => true
            ],
            [
                'name' => "add_product_category",
                'description' => "Ajouter un product_category",
                'visible' => true
            ],
            [
                'name' => "update_product_category",
                'description' => "Mettre à jour un product_category",
                'visible' => true
            ],
            [
                'name' => "delete_product_category",
                'description' => "Supprimer un product_category",
                'visible' => true
            ],
            [
                'name' => "list_store",
                'description' => "Lister les stores",
                'visible' => true
            ],
            [
                'name' => "add_store",
                'description' => "Ajouter un store",
                'visible' => true
            ],
            [
                'name' => "update_store",
                'description' => "Mettre à jour un store",
                'visible' => true
            ],
            [
                'name' => "delete_store",
                'description' => "Supprimer un store",
                'visible' => true
            ],
            [
                'name' => "list_user",
                'description' => "Lister les users",
                'visible' => true
            ],
            [
                'name' => "update_user",
                'description' => "Mettre à jour un user",
                'visible' => true
            ],
            [
                'name' => "delete_user",
                'description' => "Supprimer un user",
                'visible' => true
            ],
            [
                'name' => "list_right",
                'description' => "Lister les rights",
                'visible' => true
            ],
            [
                'name' => "add_right",
                'description' => "Ajouter un right",
                'visible' => true
            ],
            [
                'name' => "update_right",
                'description' => "Mettre à jour un right",
                'visible' => true
            ],
            [
                'name' => "delete_right",
                'description' => "Supprimer un right",
                'visible' => true
            ],
            [
                'name' => "list_profil",
                'description' => "Lister les profils",
                'visible' => true
            ],
            [
                'name' => "add_profil",
                'description' => "Ajouter un profil",
                'visible' => true
            ],
            [
                'name' => "update_profil",
                'description' => "Mettre à jour un profil",
                'visible' => true
            ],
            [
                'name' => "delete_profil",
                'description' => "Supprimer un profil",
                'visible' => true
            ],
            [
                'name' => "list_rang",
                'description' => "Lister les rangs",
                'visible' => true
            ],
            [
                'name' => "add_rang",
                'description' => "Ajouter un rang",
                'visible' => true
            ],
            [
                'name' => "update_rang",
                'description' => "Mettre à jour un rang",
                'visible' => true
            ],
            [
                'name' => "delete_rang",
                'description' => "Supprimer un rang",
                'visible' => true
            ],
            [
                'name' => "list_action",
                'description' => "Lister les action",
                'visible' => true
            ],
            [
                'name' => "add_action",
                'description' => "Ajouter un action",
                'visible' => true
            ],
            [
                'name' => "update_action",
                'description' => "Mettre à jour un action",
                'visible' => true
            ],
            [
                'name' => "delete_action",
                'description' => "Supprimer un action",
                'visible' => true
            ],
            [
                'name' => "affect_right",
                'description' => "Affecter un droit",
                'visible' => true
            ]
        ];

        foreach ($actions as $action) {
            \App\Models\Action::factory()->create($action);
        }

        #======== CREATION DES PROFILS PAR DEFAUT=========#
        $profils = [
            [
                "name" => "Système",
                "description" => "Gestionnaire du Système",
            ],
            [
                "name" => "Responsable",
                "description" => "Le Responsable du compte",
            ],
            [
                "name" => "Technicien",
                "description" => "Un Technicien de votre structure ou de FRIKLABEL",
            ],
            [
                "name" => "Employe",
                "description" => "Un Employe de votre structure",
            ],
            [
                "name" => "Agency",
                "description" => "Un Distributeur de votre structure",
            ],
            [
                "name" => "Master",
                "description" => "Master distributeur",
            ],
            [
                "name" => "Agent",
                "description" => "Agent commercial",
            ],
            [
                "name" => "Client",
                "description" => "Client",
            ],
            [
                "name" => "Admin",
                "description" => "L'administrateur",
            ],
        ];

        foreach ($profils as $profil) {
            \App\Models\Profil::factory()->create($profil);
        }

        #======== CREATION DES RANGS PAR DEFAUT=========#

        $rangs = [
            [
                "name" => "admin",
                "description" => "L'administrateur général du networking",
            ],
            [
                "name" => "moderator",
                "description" => "Le modérateur du compte",
            ],
            [
                "name" => "user",
                "description" => "Un simple utilisateur du compte",
            ],
        ];
        foreach ($rangs as $rang) {
            \App\Models\Rang::factory()->create($rang);
        }


        #======== CREATION DES RIGHTS  PAR DEFAUT =========#
        $rights = [
            ###____Droits d'un utilisaateur

            ["action" => \App\Models\Action::find(27),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Détail d'une campagne    "],
            ["action" => \App\Models\Action::find(26),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Initier une campagne    "],
            ["action" => \App\Models\Action::find(25),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Stoper une campagne    "],
            ["action" => \App\Models\Action::find(24),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Supprimer une campagne    "],
            ["action" => \App\Models\Action::find(23),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Mettre à jour une campagne    "],
            ["action" => \App\Models\Action::find(22),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Ajouter une campagne    "],
            ["action" => \App\Models\Action::find(21),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Lister les campagnes    "],
            ["action" => \App\Models\Action::find(20),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Détail d'un sms    "],
            ["action" => \App\Models\Action::find(19),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Supprimer un sms    "],
            ["action" => \App\Models\Action::find(18),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Mettre à jour un sms    "],
            ["action" => \App\Models\Action::find(17),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Ajouter un sms    "],
            ["action" => \App\Models\Action::find(16),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Lister les sms    "],
            ["action" => \App\Models\Action::find(15),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Détail d'un expediteur    "],
            ["action" => \App\Models\Action::find(14),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Supprimer un expediteur    "],
            ["action" => \App\Models\Action::find(13),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Mettre à jour un expediteur    "],
            ["action" => \App\Models\Action::find(12),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Ajouter un expediteur    "],
            ["action" => \App\Models\Action::find(11),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Lister les expediteurs    "],
            ["action" => \App\Models\Action::find(10),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Détail d'un groupe de contact    "],
            ["action" => \App\Models\Action::find(9),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Supprimer un groupe de contact    "],
            ["action" => \App\Models\Action::find(8),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Mettre à jour un groupe de contact    "],
            ["action" => \App\Models\Action::find(7),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Ajouter un groupe de contact    "],
            ["action" => \App\Models\Action::find(6),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Lister les groupe de contact    "],
            ["action" => \App\Models\Action::find(5),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Détail d'un contact    "],
            ["action" => \App\Models\Action::find(4),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Supprimer un contact    "],
            ["action" => \App\Models\Action::find(3),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Mettre à jour un contact    "],
            ["action" => \App\Models\Action::find(2),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Ajouter un contact    "],
            ["action" => \App\Models\Action::find(1),         "rang" => \App\Models\Rang::find(2),         "profil" => \App\Models\Profil::find(6),         "description" => "Droit: Lister les contacts "],
            ["action" => \App\Models\Action::find(191),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Affecter un droit    "],
            ["action" => \App\Models\Action::find(190),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un action    "],
            ["action" => \App\Models\Action::find(189),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un action    "],
            ["action" => \App\Models\Action::find(188),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un action    "],
            ["action" => \App\Models\Action::find(187),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les action    "],
            ["action" => \App\Models\Action::find(186),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un rang    "],
            ["action" => \App\Models\Action::find(185),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un rang    "],
            ["action" => \App\Models\Action::find(184),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un rang    "],
            ["action" => \App\Models\Action::find(183),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rangs    "],
            ["action" => \App\Models\Action::find(182),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un profil    "],
            ["action" => \App\Models\Action::find(181),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un profil    "],
            ["action" => \App\Models\Action::find(180),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un profil    "],
            ["action" => \App\Models\Action::find(179),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les profils    "],
            ["action" => \App\Models\Action::find(178),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un right    "],
            ["action" => \App\Models\Action::find(177),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un right    "],
            ["action" => \App\Models\Action::find(176),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un right    "],
            ["action" => \App\Models\Action::find(175),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rights    "],
            ["action" => \App\Models\Action::find(174),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un user    "],
            ["action" => \App\Models\Action::find(173),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un user    "],
            ["action" => \App\Models\Action::find(172),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les users    "],
            ["action" => \App\Models\Action::find(171),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un store    "],
            ["action" => \App\Models\Action::find(170),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un store    "],
            ["action" => \App\Models\Action::find(169),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un store    "],
            ["action" => \App\Models\Action::find(168),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les stores    "],
            ["action" => \App\Models\Action::find(167),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un product_category    "],
            ["action" => \App\Models\Action::find(166),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un product_category    "],
            ["action" => \App\Models\Action::find(165),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un product_category    "],
            ["action" => \App\Models\Action::find(164),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les product_categories    "],
            ["action" => \App\Models\Action::find(163),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un order    "],
            ["action" => \App\Models\Action::find(162),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un order    "],
            ["action" => \App\Models\Action::find(161),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un order    "],
            ["action" => \App\Models\Action::find(160),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les orders    "],
            ["action" => \App\Models\Action::find(159),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un product    "],
            ["action" => \App\Models\Action::find(158),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un product    "],
            ["action" => \App\Models\Action::find(157),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un product    "],
            ["action" => \App\Models\Action::find(156),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les products    "],
            ["action" => \App\Models\Action::find(155),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer une table    "],
            ["action" => \App\Models\Action::find(154),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour une table    "],
            ["action" => \App\Models\Action::find(153),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une table    "],
            ["action" => \App\Models\Action::find(152),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les tables    "],
            ["action" => \App\Models\Action::find(151),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un pos    "],
            ["action" => \App\Models\Action::find(150),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un pos    "],
            ["action" => \App\Models\Action::find(149),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un pos    "],
            ["action" => \App\Models\Action::find(148),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les pos    "],
            ["action" => \App\Models\Action::find(147),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un agent    "],
            ["action" => \App\Models\Action::find(146),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un agent    "],
            ["action" => \App\Models\Action::find(145),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un agent    "],
            ["action" => \App\Models\Action::find(144),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les agents    "],
            ["action" => \App\Models\Action::find(143),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un agency    "],
            ["action" => \App\Models\Action::find(142),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un agency    "],
            ["action" => \App\Models\Action::find(141),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un agency    "],
            ["action" => \App\Models\Action::find(140),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les agencies    "],
            ["action" => \App\Models\Action::find(139),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un master    "],
            ["action" => \App\Models\Action::find(138),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un master    "],
            ["action" => \App\Models\Action::find(137),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un master    "],
            ["action" => \App\Models\Action::find(136),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les masters    "],
            ["action" => \App\Models\Action::find(135),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider des factures    "],
            ["action" => \App\Models\Action::find(134),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des factures    "],
            ["action" => \App\Models\Action::find(133),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Emettre des factures    "],
            ["action" => \App\Models\Action::find(132),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste rechargement carte    "],
            ["action" => \App\Models\Action::find(131),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Autoriser reversement de commission    "],
            ["action" => \App\Models\Action::find(130),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste assurance    "],
            ["action" => \App\Models\Action::find(129),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Approuver devis    "],
            ["action" => \App\Models\Action::find(128),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Dévis assurance    "],
            ["action" => \App\Models\Action::find(127),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister assurance    "],
            ["action" => \App\Models\Action::find(126),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter assurance    "],
            ["action" => \App\Models\Action::find(125),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir relevé de compte    "],
            ["action" => \App\Models\Action::find(124),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider des dépôts    "],
            ["action" => \App\Models\Action::find(123),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter des dépôts    "],
            ["action" => \App\Models\Action::find(122),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des dépôts    "],
            ["action" => \App\Models\Action::find(121),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Réinitialiser mot de passe    "],
            ["action" => \App\Models\Action::find(120),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir solde    "],
            ["action" => \App\Models\Action::find(119),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir commission    "],
            ["action" => \App\Models\Action::find(118),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Répondre recherches approfondies    "],
            ["action" => \App\Models\Action::find(117),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste recherches approfondies    "],
            ["action" => \App\Models\Action::find(116),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Recherche approfondie    "],
            ["action" => \App\Models\Action::find(115),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider activation de carte    "],
            ["action" => \App\Models\Action::find(114),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Délivrer une carte    "],
            ["action" => \App\Models\Action::find(113),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Retirer droit à un utilisateur    "],
            ["action" => \App\Models\Action::find(112),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Réactivation    "],
            ["action" => \App\Models\Action::find(111),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les réactivations    "],
            ["action" => \App\Models\Action::find(110),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des reabonnements    "],
            ["action" => \App\Models\Action::find(109),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter stock    "],
            ["action" => \App\Models\Action::find(108),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Faire des migrations    "],
            ["action" => \App\Models\Action::find(107),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des miigration    "],
            ["action" => \App\Models\Action::find(106),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer un matériel    "],
            ["action" => \App\Models\Action::find(105),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des recrutements    "],
            ["action" => \App\Models\Action::find(104),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Recrutement canal    "],
            ["action" => \App\Models\Action::find(103),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Modification abonnement canal    "],
            ["action" => \App\Models\Action::find(102),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Finir une Opération    "],
            ["action" => \App\Models\Action::find(101),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Débiter accessoires    "],
            ["action" => \App\Models\Action::find(100),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer parabole    "],
            ["action" => \App\Models\Action::find(99),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer accessoires    "],
            ["action" => \App\Models\Action::find(98),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Migration de décodeur    "],
            ["action" => \App\Models\Action::find(97),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Recrutement (vente de décodeur)    "],
            ["action" => \App\Models\Action::find(96),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Réabonnement    "],
            ["action" => \App\Models\Action::find(95),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste décodeurs (recrutement)    "],
            ["action" => \App\Models\Action::find(94),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider les recrutements (vente de décodeur)    "],
            ["action" => \App\Models\Action::find(93),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Débiter décodeur    "],
            ["action" => \App\Models\Action::find(92),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider les recrutements (vente de décodeur)    "],
            ["action" => \App\Models\Action::find(91),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Faire la migration de décodeur    "],
            ["action" => \App\Models\Action::find(90),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Vendre décodeur    "],
            ["action" => \App\Models\Action::find(89),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer le stock de décodeur pour un partenaire    "],
            ["action" => \App\Models\Action::find(88),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter décodeur    "],
            ["action" => \App\Models\Action::find(87),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider réabonnement    "],
            ["action" => \App\Models\Action::find(86),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter renouvellement    "],
            ["action" => \App\Models\Action::find(85),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Statistiques    "],
            ["action" => \App\Models\Action::find(84),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer carte    "],
            ["action" => \App\Models\Action::find(83),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Débiter une agence    "],
            ["action" => \App\Models\Action::find(82),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une carte    "],
            ["action" => \App\Models\Action::find(81),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer mon compte    "],
            ["action" => \App\Models\Action::find(80),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter des masters    "],
            ["action" => \App\Models\Action::find(79),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter des masters    "],
            ["action" => \App\Models\Action::find(78),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister des masters    "],
            ["action" => \App\Models\Action::find(77),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider rechargement de carte    "],
            ["action" => \App\Models\Action::find(76),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rechargements    "],
            ["action" => \App\Models\Action::find(75),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter agent commercial    "],
            ["action" => \App\Models\Action::find(74),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister des agents commerciaux    "],
            ["action" => \App\Models\Action::find(73),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une carte    "],
            ["action" => \App\Models\Action::find(72),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer une agence    "],
            ["action" => \App\Models\Action::find(71),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une agence    "],
            ["action" => \App\Models\Action::find(70),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les cartes    "],
            ["action" => \App\Models\Action::find(99),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir la liste des points de vente    "],
            ["action" => \App\Models\Action::find(98),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter Point de Service, agence pour les distributeur    "],
            ["action" => \App\Models\Action::find(97),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter distributeur    "],
            ["action" => \App\Models\Action::find(96),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajout de carte    "],
            ["action" => \App\Models\Action::find(95),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: recharge de compte    "],
            ["action" => \App\Models\Action::find(94),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Administration pour distributeur    "],
            ["action" => \App\Models\Action::find(93),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Activation de carte    "],
            ["action" => \App\Models\Action::find(92),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Administration    "],
            ["action" => \App\Models\Action::find(91),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajout de droit    "],
            ["action" => \App\Models\Action::find(90),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer distributeur    "],
            ["action" => \App\Models\Action::find(59),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Envoyer de message aux distributeur    "],
            ["action" => \App\Models\Action::find(58),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Editer distribibuteur    "],
            ["action" => \App\Models\Action::find(57),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des distributeurs    "],
            ["action" => \App\Models\Action::find(56),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Statistique globale de la plateforme : Nombre de distributeurs, cartes, agents commerciaux, etc.    "],
            ["action" => \App\Models\Action::find(55),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajout d'utilisateur    "],
            ["action" => \App\Models\Action::find(54),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Crediter un compte    "],
            ["action" => \App\Models\Action::find(53),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Retirer un droit à un utilisateur    "],
            ["action" => \App\Models\Action::find(52),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Affecter un droit    "],
            ["action" => \App\Models\Action::find(51),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'une action    "],
            ["action" => \App\Models\Action::find(50),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un action    "],
            ["action" => \App\Models\Action::find(49),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un action    "],
            ["action" => \App\Models\Action::find(48),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un action    "],
            ["action" => \App\Models\Action::find(47),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les action    "],
            ["action" => \App\Models\Action::find(46),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un rang    "],
            ["action" => \App\Models\Action::find(45),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un rang    "],
            ["action" => \App\Models\Action::find(44),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un rang    "],
            ["action" => \App\Models\Action::find(43),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un rang    "],
            ["action" => \App\Models\Action::find(42),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rangs    "],
            ["action" => \App\Models\Action::find(41),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un profil    "],
            ["action" => \App\Models\Action::find(40),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un profil    "],
            ["action" => \App\Models\Action::find(39),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un profil    "],
            ["action" => \App\Models\Action::find(38),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un profil    "],
            ["action" => \App\Models\Action::find(37),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les profils    "],
            ["action" => \App\Models\Action::find(36),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un right    "],
            ["action" => \App\Models\Action::find(35),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un right    "],
            ["action" => \App\Models\Action::find(34),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un right    "],
            ["action" => \App\Models\Action::find(33),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un right    "],
            ["action" => \App\Models\Action::find(32),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rights    "],
            ["action" => \App\Models\Action::find(31),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un user    "],
            ["action" => \App\Models\Action::find(30),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un user    "],
            ["action" => \App\Models\Action::find(19),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un user    "],
            ["action" => \App\Models\Action::find(18),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les users    "],
            ["action" => \App\Models\Action::find(17),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'une campagne    "],
            ["action" => \App\Models\Action::find(16),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Initier une campagne    "],
            ["action" => \App\Models\Action::find(15),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Stoper une campagne    "],
            ["action" => \App\Models\Action::find(14),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer une campagne    "],
            ["action" => \App\Models\Action::find(13),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour une campagne    "],
            ["action" => \App\Models\Action::find(12),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une campagne    "],
            ["action" => \App\Models\Action::find(11),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les campagnes    "],
            ["action" => \App\Models\Action::find(10),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un sms    "],
            ["action" => \App\Models\Action::find(19),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un sms    "],
            ["action" => \App\Models\Action::find(18),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un sms    "],
            ["action" => \App\Models\Action::find(17),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un sms    "],
            ["action" => \App\Models\Action::find(16),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les sms    "],
            ["action" => \App\Models\Action::find(15),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un expeditor    "],
            ["action" => \App\Models\Action::find(14),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un expeditor    "],
            ["action" => \App\Models\Action::find(13),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un expeditor    "],
            ["action" => \App\Models\Action::find(12),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un expeditor    "],
            ["action" => \App\Models\Action::find(11),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les expeditors    "],
            ["action" => \App\Models\Action::find(10),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un groupe de contact    "],
            ["action" => \App\Models\Action::find(9),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un groupe de cintact    "],
            ["action" => \App\Models\Action::find(8),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un groupe de cintact    "],
            ["action" => \App\Models\Action::find(7),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un groupe de cintact    "],
            ["action" => \App\Models\Action::find(9),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les groupe de cintact    "],
            ["action" => \App\Models\Action::find(5),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un contact    "],
            ["action" => \App\Models\Action::find(4),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un contact    "],
            ["action" => \App\Models\Action::find(3),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un contact    "],
            ["action" => \App\Models\Action::find(1),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un contact    "],
            ["action" => \App\Models\Action::find(1),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les contacts "],

            ###____Droits d'un admin
            ["action" => \App\Models\Action::find(191),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Affecter un droit    "],
            ["action" => \App\Models\Action::find(190),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un action    "],
            ["action" => \App\Models\Action::find(189),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un action    "],
            ["action" => \App\Models\Action::find(188),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un action    "],
            ["action" => \App\Models\Action::find(187),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les action    "],
            ["action" => \App\Models\Action::find(186),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un rang    "],
            ["action" => \App\Models\Action::find(185),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un rang    "],
            ["action" => \App\Models\Action::find(184),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un rang    "],
            ["action" => \App\Models\Action::find(183),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rangs    "],
            ["action" => \App\Models\Action::find(182),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un profil    "],
            ["action" => \App\Models\Action::find(181),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un profil    "],
            ["action" => \App\Models\Action::find(180),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un profil    "],
            ["action" => \App\Models\Action::find(179),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les profils    "],
            ["action" => \App\Models\Action::find(178),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un right    "],
            ["action" => \App\Models\Action::find(177),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un right    "],
            ["action" => \App\Models\Action::find(176),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un right    "],
            ["action" => \App\Models\Action::find(175),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rights    "],
            ["action" => \App\Models\Action::find(174),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un user    "],
            ["action" => \App\Models\Action::find(173),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un user    "],
            ["action" => \App\Models\Action::find(172),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les users    "],
            ["action" => \App\Models\Action::find(171),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un store    "],
            ["action" => \App\Models\Action::find(170),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un store    "],
            ["action" => \App\Models\Action::find(169),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un store    "],
            ["action" => \App\Models\Action::find(168),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les stores    "],
            ["action" => \App\Models\Action::find(167),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un product_category    "],
            ["action" => \App\Models\Action::find(166),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un product_category    "],
            ["action" => \App\Models\Action::find(165),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un product_category    "],
            ["action" => \App\Models\Action::find(164),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les product_categories    "],
            ["action" => \App\Models\Action::find(163),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un order    "],
            ["action" => \App\Models\Action::find(162),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un order    "],
            ["action" => \App\Models\Action::find(161),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un order    "],
            ["action" => \App\Models\Action::find(160),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les orders    "],
            ["action" => \App\Models\Action::find(159),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un product    "],
            ["action" => \App\Models\Action::find(158),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un product    "],
            ["action" => \App\Models\Action::find(157),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un product    "],
            ["action" => \App\Models\Action::find(156),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les products    "],
            ["action" => \App\Models\Action::find(155),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer une table    "],
            ["action" => \App\Models\Action::find(154),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour une table    "],
            ["action" => \App\Models\Action::find(153),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une table    "],
            ["action" => \App\Models\Action::find(152),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les tables    "],
            ["action" => \App\Models\Action::find(151),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un pos    "],
            ["action" => \App\Models\Action::find(150),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un pos    "],
            ["action" => \App\Models\Action::find(149),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un pos    "],
            ["action" => \App\Models\Action::find(148),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les pos    "],
            ["action" => \App\Models\Action::find(147),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un agent    "],
            ["action" => \App\Models\Action::find(146),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un agent    "],
            ["action" => \App\Models\Action::find(145),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un agent    "],
            ["action" => \App\Models\Action::find(144),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les agents    "],
            ["action" => \App\Models\Action::find(143),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un agency    "],
            ["action" => \App\Models\Action::find(142),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un agency    "],
            ["action" => \App\Models\Action::find(141),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un agency    "],
            ["action" => \App\Models\Action::find(140),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les agencies    "],
            ["action" => \App\Models\Action::find(139),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un master    "],
            ["action" => \App\Models\Action::find(138),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un master    "],
            ["action" => \App\Models\Action::find(137),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un master    "],
            ["action" => \App\Models\Action::find(136),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les masters    "],
            ["action" => \App\Models\Action::find(135),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider des factures    "],
            ["action" => \App\Models\Action::find(134),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des factures    "],
            ["action" => \App\Models\Action::find(133),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Emettre des factures    "],
            ["action" => \App\Models\Action::find(132),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste rechargement carte    "],
            ["action" => \App\Models\Action::find(131),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Autoriser reversement de commission    "],
            ["action" => \App\Models\Action::find(130),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste assurance    "],
            ["action" => \App\Models\Action::find(129),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Approuver devis    "],
            ["action" => \App\Models\Action::find(128),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Dévis assurance    "],
            ["action" => \App\Models\Action::find(127),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister assurance    "],
            ["action" => \App\Models\Action::find(126),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter assurance    "],
            ["action" => \App\Models\Action::find(125),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir relevé de compte    "],
            ["action" => \App\Models\Action::find(124),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider des dépôts    "],
            ["action" => \App\Models\Action::find(123),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter des dépôts    "],
            ["action" => \App\Models\Action::find(122),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des dépôts    "],
            ["action" => \App\Models\Action::find(121),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Réinitialiser mot de passe    "],
            ["action" => \App\Models\Action::find(120),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir solde    "],
            ["action" => \App\Models\Action::find(119),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir commission    "],
            ["action" => \App\Models\Action::find(118),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Répondre recherches approfondies    "],
            ["action" => \App\Models\Action::find(117),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste recherches approfondies    "],
            ["action" => \App\Models\Action::find(116),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Recherche approfondie    "],
            ["action" => \App\Models\Action::find(115),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider activation de carte    "],
            ["action" => \App\Models\Action::find(114),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Délivrer une carte    "],
            ["action" => \App\Models\Action::find(113),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Retirer droit à un utilisateur    "],
            ["action" => \App\Models\Action::find(112),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Réactivation    "],
            ["action" => \App\Models\Action::find(111),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les réactivations    "],
            ["action" => \App\Models\Action::find(110),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des reabonnements    "],
            ["action" => \App\Models\Action::find(109),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter stock    "],
            ["action" => \App\Models\Action::find(108),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Faire des migrations    "],
            ["action" => \App\Models\Action::find(107),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des miigration    "],
            ["action" => \App\Models\Action::find(106),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer un matériel    "],
            ["action" => \App\Models\Action::find(105),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des recrutements    "],
            ["action" => \App\Models\Action::find(104),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Recrutement canal    "],
            ["action" => \App\Models\Action::find(103),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Modification abonnement canal    "],
            ["action" => \App\Models\Action::find(102),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Finir une Opération    "],
            ["action" => \App\Models\Action::find(101),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Débiter accessoires    "],
            ["action" => \App\Models\Action::find(100),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer parabole    "],
            ["action" => \App\Models\Action::find(99),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer accessoires    "],
            ["action" => \App\Models\Action::find(98),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Migration de décodeur    "],
            ["action" => \App\Models\Action::find(97),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Recrutement (vente de décodeur)    "],
            ["action" => \App\Models\Action::find(96),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Réabonnement    "],
            ["action" => \App\Models\Action::find(95),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste décodeurs (recrutement)    "],
            ["action" => \App\Models\Action::find(94),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider les recrutements (vente de décodeur)    "],
            ["action" => \App\Models\Action::find(93),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Débiter décodeur    "],
            ["action" => \App\Models\Action::find(92),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider les recrutements (vente de décodeur)    "],
            ["action" => \App\Models\Action::find(91),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Faire la migration de décodeur    "],
            ["action" => \App\Models\Action::find(90),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Vendre décodeur    "],
            ["action" => \App\Models\Action::find(89),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer le stock de décodeur pour un partenaire    "],
            ["action" => \App\Models\Action::find(88),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter décodeur    "],
            ["action" => \App\Models\Action::find(87),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider réabonnement    "],
            ["action" => \App\Models\Action::find(86),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter renouvellement    "],
            ["action" => \App\Models\Action::find(85),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Statistiques    "],
            ["action" => \App\Models\Action::find(84),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer carte    "],
            ["action" => \App\Models\Action::find(83),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Débiter une agence    "],
            ["action" => \App\Models\Action::find(82),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une carte    "],
            ["action" => \App\Models\Action::find(81),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer mon compte    "],
            ["action" => \App\Models\Action::find(80),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter des masters    "],
            ["action" => \App\Models\Action::find(79),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter des masters    "],
            ["action" => \App\Models\Action::find(78),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister des masters    "],
            ["action" => \App\Models\Action::find(77),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Valider rechargement de carte    "],
            ["action" => \App\Models\Action::find(76),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rechargements    "],
            ["action" => \App\Models\Action::find(75),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter agent commercial    "],
            ["action" => \App\Models\Action::find(74),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister des agents commerciaux    "],
            ["action" => \App\Models\Action::find(73),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une carte    "],
            ["action" => \App\Models\Action::find(72),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Créditer une agence    "],
            ["action" => \App\Models\Action::find(71),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une agence    "],
            ["action" => \App\Models\Action::find(70),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les cartes    "],
            ["action" => \App\Models\Action::find(99),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Voir la liste des points de vente    "],
            ["action" => \App\Models\Action::find(98),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter Point de Service, agence pour les distributeur    "],
            ["action" => \App\Models\Action::find(97),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter distributeur    "],
            ["action" => \App\Models\Action::find(96),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajout de carte    "],
            ["action" => \App\Models\Action::find(95),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: recharge de compte    "],
            ["action" => \App\Models\Action::find(94),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Administration pour distributeur    "],
            ["action" => \App\Models\Action::find(93),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Activation de carte    "],
            ["action" => \App\Models\Action::find(92),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Administration    "],
            ["action" => \App\Models\Action::find(91),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajout de droit    "],
            ["action" => \App\Models\Action::find(90),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer distributeur    "],
            ["action" => \App\Models\Action::find(59),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Envoyer de message aux distributeur    "],
            ["action" => \App\Models\Action::find(58),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Editer distribibuteur    "],
            ["action" => \App\Models\Action::find(57),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Liste des distributeurs    "],
            ["action" => \App\Models\Action::find(56),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Statistique globale de la plateforme : Nombre de distributeurs, cartes, agents commerciaux, etc.    "],
            ["action" => \App\Models\Action::find(55),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajout d'utilisateur    "],
            ["action" => \App\Models\Action::find(54),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Crediter un compte    "],
            ["action" => \App\Models\Action::find(53),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Retirer un droit à un utilisateur    "],
            ["action" => \App\Models\Action::find(52),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Affecter un droit    "],
            ["action" => \App\Models\Action::find(51),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'une action    "],
            ["action" => \App\Models\Action::find(50),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un action    "],
            ["action" => \App\Models\Action::find(49),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un action    "],
            ["action" => \App\Models\Action::find(48),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un action    "],
            ["action" => \App\Models\Action::find(47),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les action    "],
            ["action" => \App\Models\Action::find(46),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un rang    "],
            ["action" => \App\Models\Action::find(45),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un rang    "],
            ["action" => \App\Models\Action::find(44),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un rang    "],
            ["action" => \App\Models\Action::find(43),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un rang    "],
            ["action" => \App\Models\Action::find(42),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rangs    "],
            ["action" => \App\Models\Action::find(41),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un profil    "],
            ["action" => \App\Models\Action::find(40),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un profil    "],
            ["action" => \App\Models\Action::find(39),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un profil    "],
            ["action" => \App\Models\Action::find(38),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un profil    "],
            ["action" => \App\Models\Action::find(37),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les profils    "],
            ["action" => \App\Models\Action::find(36),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un right    "],
            ["action" => \App\Models\Action::find(35),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un right    "],
            ["action" => \App\Models\Action::find(34),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un right    "],
            ["action" => \App\Models\Action::find(33),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un right    "],
            ["action" => \App\Models\Action::find(32),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les rights    "],
            ["action" => \App\Models\Action::find(31),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un user    "],
            ["action" => \App\Models\Action::find(30),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un user    "],
            ["action" => \App\Models\Action::find(19),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un user    "],
            ["action" => \App\Models\Action::find(18),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les users    "],
            ["action" => \App\Models\Action::find(17),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'une campagne    "],
            ["action" => \App\Models\Action::find(16),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Initier une campagne    "],
            ["action" => \App\Models\Action::find(15),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Stoper une campagne    "],
            ["action" => \App\Models\Action::find(14),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer une campagne    "],
            ["action" => \App\Models\Action::find(13),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour une campagne    "],
            ["action" => \App\Models\Action::find(12),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter une campagne    "],
            ["action" => \App\Models\Action::find(11),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les campagnes    "],
            ["action" => \App\Models\Action::find(10),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un sms    "],
            ["action" => \App\Models\Action::find(19),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un sms    "],
            ["action" => \App\Models\Action::find(18),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un sms    "],
            ["action" => \App\Models\Action::find(17),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un sms    "],
            ["action" => \App\Models\Action::find(16),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les sms    "],
            ["action" => \App\Models\Action::find(15),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un expeditor    "],
            ["action" => \App\Models\Action::find(14),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un expeditor    "],
            ["action" => \App\Models\Action::find(13),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un expeditor    "],
            ["action" => \App\Models\Action::find(12),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un expeditor    "],
            ["action" => \App\Models\Action::find(11),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les expeditors    "],
            ["action" => \App\Models\Action::find(10),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un groupe de contact    "],
            ["action" => \App\Models\Action::find(9),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un groupe de cintact    "],
            ["action" => \App\Models\Action::find(8),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un groupe de cintact    "],
            ["action" => \App\Models\Action::find(7),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un groupe de cintact    "],
            ["action" => \App\Models\Action::find(9),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les groupe de cintact    "],
            ["action" => \App\Models\Action::find(5),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Détail d'un contact    "],
            ["action" => \App\Models\Action::find(4),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Supprimer un contact    "],
            ["action" => \App\Models\Action::find(3),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Mettre à jour un contact    "],
            ["action" => \App\Models\Action::find(1),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Ajouter un contact    "],
            ["action" => \App\Models\Action::find(1),         "rang" => \App\Models\Rang::find(1),         "profil" => \App\Models\Profil::find(9),         "description" => "Droit: Lister les contacts "]
        ];

        foreach ($rights as $right) {
            \App\Models\Right::factory()->create($right);
        }


        ###======== CREATION DES USERS PAR DEFAUT==========###
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$CI5P59ICr/HOihqlnYUrLeKwCajgMKd34HB66.JsJBrIOQY9fazrG', #admin
                'is_super_admin' => true,
                'phone' => "22961765591",
            ],
            [
                'name' => 'Joel PPJ',
                'username' => 'ppjjoel',
                'email' => 'ppjjoel@gmail.com',
                'password' => '$2y$10$ZT2msbcfYEUWGUucpnrHwekWMBDe1H0zGrvB.pzQGpepF8zoaGIMC', #ppjjoel
                'is_super_admin' => true,
                'phone' => "22961765592",
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::factory()->create($user);
        }

        ###========CREATION DES TYPES DE TICKETS PAR DEFAUT ==========###
        $ticket_types = [
            [
                'name' => 'Issue',
            ],
            [
                'name' => 'Question',
            ]
        ];

        foreach ($ticket_types as $ticket_type) {
            \App\Models\TicketType::factory()->create($ticket_type);
        }

        ###========CREATION DES STATUS DE TICKETS PAR DEFAUT ==========###
        $ticket_status = [
            [
                'name' => 'Nouveau',
            ],
            [
                'name' => 'En Cour',
            ],
            [
                'name' => 'Suspendu',
            ],
            [
                'name' => 'Fini',
            ],
        ];

        foreach ($ticket_status as $status) {
            \App\Models\TicketStatus::factory()->create($status);
        }

        #======== CREATION DES CATEGORIES DE PRODUIT PAR DEFAUT =========#
        $product_categories = [
            [
                "name" => "Tout",
                "description" => "Toutes catégorie confondues",
            ],
            [
                "name" => "Tout/Dépenses",
                "description" => "Catégorie dépense",
            ],
            [
                "name" => "Tout/Vendable",
                "description" => "Produit Vendable",
            ],
            [
                "name" => "Tout/Vendable/POS",
                "description" => "Produit Vendable Point de Vente",
            ]
        ];
        foreach ($product_categories as $product_categorie) {
            \App\Models\ProductCategory::factory()->create($product_categorie);
        }

        #======== CREATION DES TYPES DE PRODUIT PAR DEFAUT =========#
        $produitTypes = [
            [
                "name" => "Produit stockable",
                "description" => "Un produit stockable est un produit dont on peut gérer le stock!",
            ],
            [
                "name" => "Service",
                "description" => "Un service est un produit immatériel que vous fournissez!",
            ],
            [
                "name" => "Consommable",
                "description" => "Un produit consommable est un produit dont le stock n'est pas géré!",
            ],
        ];
        foreach ($produitTypes as $type) {
            \App\Models\ProductType::factory()->create($type);
        }

        #======== CREATION DES ETIQUETTES DE PRODUIT PAR DEFAUT =========#
        $produitEtiquettes = [
            [
                "name" => "Etiquette 1",
            ],
            [
                "name" => "Etiquette 2",
            ],
            [
                "name" => "Etiquette 3",
            ],
        ];
        foreach ($produitEtiquettes as $produitEtiquette) {
            \App\Models\Etiquette::factory()->create($produitEtiquette);
        }

        ##======== CREATION DES ROLES PAR DEFAUT ============####
        $roles = [
            [
                'label' => 'is_marketer'
            ],
            [
                'label' => 'is_exploitation'
            ],
            [
                'label' => 'is_logistique'
            ]
        ];
        foreach ($roles as $role) {
            \App\Models\Role::factory()->create($role);
        };

        ##======== CREATION DES REPERTOIRES PAR DEFAUT ============####
        $repertoires = [
            [
                'firstname' => 'AJAYI',
                'lastname' => 'Benoît',
                'ministry' => 'Pasteur',
                'denomination' => 'Eglise Centre de Prière des Apôtres (CPA)',
                'residence' => "Djeffa PK 16",
                "commune" => "Sèmè Kpodji",
                "contact" => "67529154",
                "owner" => 1,
            ],
            [
                'firstname' => 'ABIDOHO',
                'lastname' => 'Johane',
                'ministry' => 'Pasteur',
                'denomination' => 'MPRSEC',
                'residence' => "Cotonou",
                "commune" => "Cotonou",
                "contact" => "69446087",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADINGBANNON',
                'lastname' => 'Flora',
                'ministry' => 'Prophétesse',
                'denomination' => 'ECPA',
                'residence' => "Djeffa",
                "commune" => "Sèmè Kpodji",
                "contact" => "67197233",
                "owner" => 1,
            ],
            [
                'firstname' => 'AKPAMOLI',
                'lastname' => 'Richard',
                'denomination' => 'Eglise Biblique du Fondement Chrétien (EBFC',
                'residence' => "PK 10",
                'ministry' => 'Sèmè Kpodji',
                "commune" => "Sèmè Kpodji",
                "contact" => "66020409",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNGA',
                'lastname' => 'Innocent',
                'ministry' => 'Evangéliste',
                'denomination' => 'MIERS Chandelier d’or',
                'residence' => "Djèrègbé",
                "commune" => "Sèmè Kpodji",
                "contact" => "96074226",
                "owner" => 1,
            ],
            [
                'firstname' => 'AHOUANDJINO',
                'lastname' => 'U Henri',
                'ministry' => 'Apôtres',
                'denomination' => 'Mission Internationale Cité de Triomphe',
                'residence' => "Sèmè Kpodji",
                "commune" => "Sèmè Kpodji",
                "contact" => "97879047",
                "owner" => 1,
            ],
            [
                'firstname' => 'TOHOUEGNON',
                'lastname' => 'Martin',
                'ministry' => 'Pasteur',
                'denomination' => 'Eglise en Mission pour la Moisson des Ames (EMMA)',
                'residence' => "Makinsa",
                "commune" => "Abomey Calavi",
                "contact" => "94864161",
                "owner" => 1,
            ],
            [
                'firstname' => 'BONOU',
                'lastname' => 'Martin',
                'ministry' => 'Pasteur Fondateur',
                'denomination' => 'Eglise Montagne Union des Saints Divin (ESMUD)',
                'residence' => "Zounta",
                "commune" => "Dangbo",
                "contact" => "97155536",
                "owner" => 1,
            ],
            [
                'firstname' => 'SAGBOHAN',
                'lastname' => 'Fabrice',
                'ministry' => 'Pasteur',
                'denomination' => 'MEAD',
                'residence' => "Missérété",
                "commune" => "AkproMissérété",
                "contact" => "97229653",
                "owner" => 1,
            ],
            [
                'firstname' => 'AZANDEGBE',
                'lastname' => 'Wilfried',
                'ministry' => 'Pasteur',
                'denomination' => 'MEDiC Bénin',
                'residence' => "Cocotomey",
                "commune" => "Abomey Calavi",
                "contact" => "96884488",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUESSOU',
                'lastname' => 'Marcel B.',
                'ministry' => 'Evangéliste',
                'denomination' => 'EBSE',
                'residence' => "Akpakpa",
                "commune" => "Cotonou",
                "contact" => "97628156",
                "owner" => 1,
            ],
            [
                'firstname' => 'AGBANDE',
                'lastname' => 'Mathurin Sèvèho',
                'ministry' => 'Pasteur',
                'denomination' => "EPED",
                'residence' => "Porto Novo",
                "commune" => "Porto Novo",
                "contact" => "96549212",
                "owner" => 1,
            ],
            [
                'firstname' => 'DOSSA',
                'lastname' => 'Mathias',
                'ministry' => 'Evangéliste',
                'denomination' => "CAC",
                'residence' => "Tatonnonk on",
                "commune" => "Adja-Ouèrè",
                "contact" => "97233813",
                "owner" => 1,
            ],
            [
                'firstname' => 'DOSSA',
                'lastname' => 'Toussaint',
                'ministry' => 'Accueil',
                'denomination' => "CAC",
                'residence' => "Tatonnonk on",
                "commune" => "Adja-Ouèrè",
                "contact" => "90151847",
                "owner" => 1,
            ],
            [
                'firstname' => 'Hossou',
                'lastname' => 'Christophe',
                'ministry' => 'Choriste',
                'denomination' => "CAC",
                'residence' => "Tatonnonk on",
                "commune" => "Adja-Ouèrè",
                "contact" => "53667288",
                "owner" => 1,
            ],
            [
                'firstname' => 'ABIKO',
                'lastname' => 'Marcellin',
                'ministry' => 'Evangéliste',
                'denomination' => "MEGA",
                'residence' => "Bonou",
                "commune" => "Bonou",
                "contact" => "66478001",
                "owner" => 1,
            ],
            [
                'firstname' => 'LAWANI',
                'lastname' => 'Sahadou',
                'ministry' => 'Révérend Evangéliste',
                'denomination' => "Ministère d’Evangélisation Pentecotiste des Amis du Christ (MEPAC)",
                'residence' => "Pahou Bazounkpa",
                "commune" => "Ouidah",
                "contact" => "97983681",
                "owner" => 1,
            ],
            [
                'firstname' => 'GAHOUNGBOLA',
                'lastname' => 'Mouhamadou Yessoufou',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise de la Rédemption Complète",
                'residence' => "Pobè Itchèko",
                "commune" => "Pobè",
                "contact" => "97051507",
                "owner" => 1,
            ],
            [
                'firstname' => 'VAGBE',
                'lastname' => 'Laurent',
                'ministry' => 'Evangéliste',
                'denomination' => "EEAD",
                'residence' => "Houèto",
                "commune" => "Abomey Calavi",
                "contact" => "52434953",
                "owner" => 1,
            ],
            [
                'firstname' => 'QUENUM',
                'lastname' => 'Gontran Sinvique',
                'ministry' => 'Pasteur',
                'denomination' => "MEBE Bénin",
                'residence' => "Kpodji",
                "commune" => "Sèmè Kpodji",
                "contact" => "90947924",
                "owner" => 1,
            ],
            [
                'firstname' => 'KPATINVOH',
                'lastname' => 'Romain Femi',
                'ministry' => 'Pasteur',
                'denomination' => "MCI",
                'residence' => "Djèrègbé",
                "commune" => "Sèmè Kpodji",
                "contact" => "67627255",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUESSINON',
                'lastname' => 'Basile',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise Formatrice des Disciples du Christ (EFDC)",
                'residence' => "Houédota Djoko",
                "commune" => "Zè",
                "contact" => "97494081",
                "owner" => 1,
            ],
            [
                'firstname' => 'OJEBISI',
                'lastname' => 'Rébécca',
                'ministry' => 'Pasteur',
                'denomination' => "MCI",
                'residence' => "Djèrègbé",
                "commune" => "Sèmè Kpodji",
                "contact" => "56730884",
                "owner" => 1,
            ],
            [
                'firstname' => 'OGUME',
                'lastname' => 'Jude',
                'ministry' => 'Pasteur',
                'denomination' => "Pentecost",
                'residence' => "Niamey/Niger",
                "commune" => "Niamey",
                "contact" => "96565361",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADJASSE A.',
                'lastname' => 'Irène',
                'ministry' => 'Pasteur',
                'denomination' => "MICIT",
                'residence' => "Sèmè Okoun",
                "commune" => "Sèmè Kpodji",
                "contact" => "97720316",
                "owner" => 1,
            ],
            [
                'firstname' => 'GBETIE',
                'lastname' => 'Anita',
                'ministry' => 'Prophétesse',
                'denomination' => "MICIT",
                'residence' => "Tanto",
                "commune" => "Cotonou",
                "contact" => "97572482",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADJAGONOU',
                'lastname' => 'Sylvain Jesugnon',
                'ministry' => 'Pasteur',
                'denomination' => "MICIT",
                'residence' => "Djeffa",
                "commune" => "Sèmè Kpodji",
                "contact" => "97782895",
                "owner" => 1,
            ],
            [
                'firstname' => 'TOHOUEKPON',
                'lastname' => 'Sèdo Mathieu',
                'ministry' => 'Apotre',
                'denomination' => "Mission Internationale de la Paix",
                'residence' => "Djèrègbé Gbokpa",
                "commune" => "Sèmè Kpodji",
                "contact" => "96287851",
                "owner" => 1,
            ],
            [
                'firstname' => 'TOUKA',
                'lastname' => 'Akaba Tiaka T',
                'ministry' => 'Pasteur',
                'denomination' => "EMISA",
                'residence' => "Lomé",
                "commune" => "Golfe 2",
                "contact" => "+22890247200",
                "owner" => 1,
            ],
            [
                'firstname' => 'AHOUANDJINO',
                'lastname' => 'U Enock',
                'ministry' => 'Choriste',
                'denomination' => "MICIT",
                'residence' => "Sèmè Okoun",
                "commune" => "Sèmè Podji",
                "contact" => "53258557",
                "owner" => 1,
            ],
            [
                'firstname' => 'HONGA',
                'lastname' => 'Dieu donné',
                'ministry' => 'Evangéliste',
                'denomination' => "CIR",
                'residence' => "Akpakpa",
                "commune" => "Cotonou",
                "contact" => "51226508",
                "owner" => 1,
            ],
            [
                'firstname' => 'FACHOLA',
                'lastname' => 'Jean',
                'ministry' => 'Pasteur',
                'denomination' => "EEFC",
                'residence' => "Tatonnonk on",
                "commune" => "Adja Ouèrè",
                "contact" => "66441702",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADJIMON',
                'lastname' => 'Sefounin',
                'ministry' => 'Evangéliste',
                'denomination' => "Eglise Internationale des Vainqueurs",
                'residence' => "Lomé Apéssito",
                "commune" => "Zio",
                "contact" => "22890911418",
                "owner" => 1,
            ],
            [
                'firstname' => 'GOUKPAM',
                'lastname' => 'Bignon',
                'ministry' => 'Evangéliste',
                'denomination' => "EPID",
                'residence' => "Pobé",
                "commune" => "Pobè",
                "contact" => "97063831",
                "owner" => 1,
            ],
            [
                'firstname' => 'WANOU',
                'lastname' => 'Timothée',
                'ministry' => 'Choriste',
                'denomination' => "Mission Internationale Cité de Triomphe (MICIT)",
                'residence' => "Akpakpa",
                "commune" => "Cotonou",
                "contact" => "61222138",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNGU',
                'lastname' => 'Blaise',
                'ministry' => 'Pasteur',
                'denomination' => "MICIT",
                'residence' => "Acadjamey",
                "commune" => "Ouidah",
                "contact" => "96199506",
                "owner" => 1,
            ],
            [
                'firstname' => 'VAGBE',
                'lastname' => 'Laurent D',
                'ministry' => 'Evangéliste',
                'denomination' => "EEAD",
                'residence' => "Houèto",
                "commune" => "Abomey Calavi",
                "contact" => "52434953",
                "owner" => 1,
            ],
            [
                'firstname' => 'VAGBE',
                'lastname' => 'Laurent D',
                'ministry' => 'Evangéliste',
                'denomination' => "EEAD",
                'residence' => "Houèto",
                "commune" => "Abomey Calavi",
                "contact" => "52434953",
                "owner" => 1,
            ],
            [
                'firstname' => 'DOSSA M.',
                'lastname' => 'Georges',
                'ministry' => 'Serviteur de Dieu',
                'denomination' => "CAC",
                'residence' => "Calavi",
                "commune" => "Abomey Calavi",
                "contact" => "66772465",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNTO-ADA',
                'lastname' => 'Lofanhouede Isidore',
                'ministry' => 'Apotre',
                'denomination' => "Eglise de la Puissance Irrésistible de Dieu",
                'residence' => "Bénin Zone résidentielle",
                "commune" => "Pobè",
                "contact" => "97073327",
                "owner" => 1,
            ],
            [
                'firstname' => 'KPOMASSI',
                'lastname' => 'Komi',
                'ministry' => 'Assistant évangéliste',
                'denomination' => "Eglise Jésus le Miracle",
                'residence' => "Djagble",
                "commune" => "Zio/Togo",
                "contact" => "96338398",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUSSOU',
                'lastname' => 'Floriane Melvina',
                'ministry' => 'Chantre',
                'denomination' => "Ministère Chrétien des Graces Excellentes (MCGE)",
                'residence' => "Sèmè Okoun",
                "commune" => "Sèmè Podji",
                "contact" => "63933869",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNVENOU',
                'lastname' => 'Francine Olabissi',
                'ministry' => 'Prophétesse',
                'denomination' => "Eglise Chrétienne Racheté de Dieu (RCCG)",
                'residence' => "Calavi",
                "commune" => "Abomey Calavi",
                "contact" => "58962313",
                "owner" => 1,
            ],
            [
                'firstname' => 'HONGA',
                'lastname' => 'Omer',
                'ministry' => 'Evangéliste',
                'denomination' => "CIR",
                'residence' => "Akpakpa",
                "commune" => "Cotonou",
                "contact" => "62528100",
                "owner" => 1,
            ],
            [
                'firstname' => 'TCHEVI',
                'lastname' => 'Djimessa',
                'ministry' => 'Evangéliste',
                'denomination' => "CEFORD TOGO",
                'residence' => "Tabligbo",
                "commune" => "Yoto 1",
                "contact" => "22893491954",
                "owner" => 1,
            ],
            [
                'firstname' => 'GBEDOLO',
                'lastname' => 'Gédéon',
                'ministry' => 'Pasteur',
                'denomination' => "MICIT",
                'residence' => "Zogbadjè",
                "commune" => "Abomey Calavi",
                "contact" => "96796434",
                "owner" => 1,
            ],
            [
                'firstname' => 'KPOGNUIDE',
                'lastname' => 'Benjamin',
                'ministry' => 'Pasteur',
                'denomination' => "CEFORD TOGO",
                'residence' => "Tabligbo",
                "commune" => "Yoto 1",
                "contact" => "22899633469",
                "owner" => 1,
            ],
            [
                'firstname' => 'EBOE',
                'lastname' => 'Zinsou Nestor',
                'ministry' => 'Evangéliste',
                'denomination' => "CEFORD TOGO",
                'residence' => "Tsévié",
                "commune" => "Zio 1",
                "contact" => "22899743020",
                "owner" => 1,
            ],
            [
                'firstname' => 'AFANTCHAO',
                'lastname' => 'Christophe',
                'ministry' => 'Evangéliste',
                'denomination' => "CEFORD TOGO",
                'residence' => "Afangna",
                "commune" => "Bas Mono 1",
                "contact" => "22898325971",
                "owner" => 1,
            ],
            [
                'firstname' => 'MEDJIKO',
                'lastname' => 'Yaovi Ferdinard',
                'ministry' => 'Evangéliste',
                'denomination' => "Jésus est la Solution",
                'residence' => "Kponou",
                "commune" => "Haho 2",
                "contact" => "22897005270",
                "owner" => 1,
            ],
            [
                'firstname' => 'SADOGBE S.',
                'lastname' => 'Alphonse',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise Evangélique de la Délivrance et du Salut en Christ (EEDSC)",
                'residence' => "Tankpè",
                "commune" => "Abomey Calavi",
                "contact" => "96162814",
                "owner" => 1,
            ],
            [
                'firstname' => 'HONGA',
                'lastname' => 'Dona Christiana Bénédicte',
                'ministry' => 'Evangéliste',
                'denomination' => "Communauté Internationale de la Rédemption(CIR)",
                'residence' => "Akpakpa",
                "commune" => "Cotonou",
                "contact" => "67978719",
                "owner" => 1,
            ],
            [
                'firstname' => 'AHOUANSE',
                'lastname' => 'Yasmine Isabelle',
                'ministry' => 'Evangéliste',
                'denomination' => "Mission Evangélique Pain de Vie",
                'residence' => "Goho",
                "commune" => "Abomey/Zou",
                "contact" => "97564890",
                "owner" => 1,
            ],
            [
                'firstname' => 'VLAVONOU',
                'lastname' => 'Seth Mahoutondji',
                'ministry' => 'Evangéliste',
                'denomination' => "Mission Evangélique pour la Libération des Captifs (MELC)",
                'residence' => "Djeffa Glégbonou",
                "commune" => "Sèmè Kpodji",
                "contact" => "97815532",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNGBEDJI',
                'lastname' => 'Hermeline',
                'ministry' => 'Evangéliste et monitrice',
                'denomination' => "Cocotomey et akpakpa",
                'residence' => "Cocotomey et akpakpa",
                "commune" => "Calavi et Cotonou",
                "contact" => "98809141",
                "owner" => 1,
            ],
            [
                'firstname' => 'ALAVO',
                'lastname' => 'Gilles',
                'ministry' => 'Moniteur',
                'denomination' => "MEPA-VIE",
                'residence' => "Goho",
                "commune" => "Abomey/Zou",
                "contact" => "66059330",
                "owner" => 1,
            ],
            [
                'firstname' => 'MITCHOWANO',
                'lastname' => 'U Marius',
                'ministry' => 'Membre',
                'denomination' => "Foi Apostolique",
                'residence' => "Yagbé",
                "commune" => "Sèmè Podji",
                "contact" => "62430446",
                "owner" => 1,
            ],
            [
                'firstname' => 'MEME',
                'lastname' => 'Simon',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise en Mission pour le Salut (EMS)",
                'residence' => "Godomey Togoudo",
                "commune" => "Calavi",
                "contact" => "67102077",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNGBEDJI',
                'lastname' => 'Esther',
                'ministry' => 'Coordonnatrice des femmes et évangéliste',
                'denomination' => "Eglise Biblique de la Vie Profonde",
                'residence' => "Cité Houéyiho",
                "commune" => "Cotonou",
                "contact" => "66304145",
                "owner" => 1,
            ],
            [
                'firstname' => 'VIKPODIGNI',
                'lastname' => 'Foloashadé',
                'ministry' => 'Choriste',
                'denomination' => "Eglise Biblique de la Vie Profonde",
                'residence' => "Cité Houéyiho",
                "commune" => "Cotonou",
                "contact" => "67371356",
                "owner" => 1,
            ],
            [
                'firstname' => 'AROUNA',
                'lastname' => 'Rafatou Mondoukpè',
                'ministry' => 'Apotre/Intercesseur/Evangéliste',
                'denomination' => "Eglise Pain de Vie",
                'residence' => "",
                "commune" => "",
                "contact" => "90732509",
                "owner" => 1,
            ],
            [
                'firstname' => 'GNARIGO',
                'lastname' => 'Bénédicte',
                'ministry' => 'Chantre',
                'denomination' => "Assemblée de Dieu",
                'residence' => "Parakou",
                "commune" => "Parakou",
                "contact" => "67461564",
                "owner" => 1,
            ],
            [
                'firstname' => 'DAPA',
                'lastname' => 'Yao Hermann',
                'ministry' => 'Pasteur',
                'denomination' => "Centre de Prière Bethel",
                'residence' => "Cotonou",
                "commune" => "Cotonou",
                "contact" => "40044759",
                "owner" => 1,
            ],
            [
                'firstname' => 'NOUANTI',
                'lastname' => 'Silas',
                'ministry' => 'Pasteur',
                'denomination' => "Centre de Prière Bethel",
                'residence' => "Parakou",
                "commune" => "Borgou",
                "contact" => "66096372",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADANLOKONON',
                'lastname' => 'François',
                'ministry' => 'Missionnaire',
                'denomination' => "Église Baptiste Avogbanna",
                'residence' => "Adamè",
                "commune" => "Bohicon",
                "contact" => "69622098",
                "owner" => 1,
            ],
            [
                'firstname' => 'AJAVON',
                'lastname' => 'Abraham',
                'ministry' => 'Pasteur principal',
                'denomination' => "Église Gédéon international du Togo (EGI)",
                'residence' => "Lomé",
                "commune" => "Lomé",
                "contact" => "22898939430",
                "owner" => 1,
            ],
            [
                'firstname' => 'APEDO',
                'lastname' => 'Eliakim',
                'ministry' => 'Evangéliste',
                'denomination' => "MEPES TG",
                'residence' => "Notsé",
                "commune" => "Région des plateaux",
                "contact" => "22994761024",
                "owner" => 1,
            ],
            [
                'firstname' => 'DAGONA',
                'lastname' => 'kossivi',
                'ministry' => 'Apotre',
                'denomination' => "Eglise Apostolique du Togo",
                'residence' => "Blitta",
                "commune" => "Togo",
                "contact" => "22891660614",
                "owner" => 1,
            ],
            [
                'firstname' => 'Esso',
                'lastname' => 'kodjo Gaston',
                'ministry' => 'Pasteur principal',
                'denomination' => "Ministère Impact Monde",
                'residence' => "Adéticopé",
                "commune" => "Lomé",
                "contact" => "22891640196",
                "owner" => 1,
            ],
            [
                'firstname' => 'Esso',
                'lastname' => 'Gaston',
                'ministry' => '',
                'denomination' => "NEW CITY OF GLORY DU Ministère Impact Monde",
                'residence' => "",
                "commune" => "",
                "contact" => "",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUESSOU',
                'lastname' => 'EZÉKIEL',
                'ministry' => 'Evangéliste',
                'denomination' => "MEA",
                'residence' => "Agla",
                "commune" => "Cotonou",
                "contact" => "61614229",
                "owner" => 1,
            ],
            [
                'firstname' => 'EBOE',
                'lastname' => 'ZINSOU',
                'ministry' => 'Evangéliste',
                'denomination' => "AMOUR DE DIEU",
                'residence' => "Tsévié",
                "commune" => "Lomé",
                "contact" => "22899743020",
                "owner" => 1,
            ],
            [
                'firstname' => 'MEDJILO',
                'lastname' => 'FERDINAND YAOVI',
                'ministry' => 'Evangéliste',
                'denomination' => "JÉSUS EST LA SOLUTION(JES)",
                'residence' => "Kponou",
                "commune" => "Région des plateaux",
                "contact" => "22897005270",
                "owner" => 1,
            ],
            [
                'firstname' => 'GBEMADON',
                'lastname' => 'Timothé',
                'ministry' => 'Prédicateur',
                'denomination' => "Église Apostolique du Bénin",
                'residence' => "Arafat",
                "commune" => "Parakou",
                "contact" => "69477980",
                "owner" => 1,
            ],
            [
                'firstname' => 'MALLEY',
                'lastname' => 'Anselme',
                'ministry' => 'Moniteur et choriste',
                'denomination' => "Eglise Apostolique du Bénin",
                'residence' => "Comé",
                "commune" => "Mono",
                "contact" => "96181520",
                "owner" => 1,
            ],
            [
                'firstname' => 'GANDJI',
                'lastname' => 'JACQUES DEO GRATIAS PHILIPPE',
                'ministry' => 'Evangéliste/Resp.musical/Moniteur/Prédicateur',
                'denomination' => "Mission Évangélique de la Dispensation(MED)",
                'residence' => "Ekpè",
                "commune" => "Sèmè Podji",
                "contact" => "96842189",
                "owner" => 1,
            ],
            [
                'firstname' => 'Sèhouénou',
                'lastname' => 'Clément VIKPODIGNI',
                'ministry' => 'Visionnaire',
                'denomination' => "MVCP",
                'residence' => "Houéyiho",
                "commune" => "Cotonou",
                "contact" => "64735808",
                "owner" => 1,
            ],
            [
                'firstname' => 'KOUKOUI A.',
                'lastname' => 'Alban',
                'ministry' => 'Secrétaire d’église et directeur communication',
                'denomination' => "Adventiste du Septième Jour au Bénin",
                'residence' => "3 ième arrondissement",
                "commune" => "Cotonou",
                "contact" => "97330607",
                "owner" => 1,
            ],
            [
                'firstname' => 'AGBIDINOUKOUN',
                'lastname' => 'Inès',
                'ministry' => 'Enseignante',
                'denomination' => "Vie profonde",
                'residence' => "Vedoko",
                "commune" => "Cotonou",
                "contact" => "97166779",
                "owner" => 1,
            ],
            [
                'firstname' => 'DOGLO',
                'lastname' => 'Chadrac Jesutomisin',
                'ministry' => 'Evangéliste/Assistant Pasteur',
                'denomination' => "Vie profonde",
                'residence' => "Cocotomey",
                "commune" => "Abomey Calavi",
                "contact" => "96717223",
                "owner" => 1,
            ],
            [
                'firstname' => 'DOGLO',
                'lastname' => 'Chadrac Jesutomisin',
                'ministry' => 'Evangéliste/Assistant Pasteur',
                'denomination' => "Vie profonde",
                'residence' => "Cocotomey",
                "commune" => "Abomey Calavi",
                "contact" => "96717223",
                "owner" => 1,
            ],
            [
                'firstname' => 'ANATOVI',
                'lastname' => 'JEAN-LUC',
                'ministry' => 'Chrétien',
                'denomination' => "Vie profonde",
                'residence' => "Vedoko",
                "commune" => "Littoral",
                "contact" => "95341483",
                "owner" => 1,
            ],
            [
                'firstname' => 'SADOGBE',
                'lastname' => 'S. Alphonse',
                'ministry' => 'Pasteur',
                'denomination' => "Église Évangélique de la Délivance et du Salut en Christ(Kouhounou)",
                'residence' => "Tankpè",
                "commune" => "Atlantique",
                "contact" => "96162814",
                "owner" => 1,
            ],
            [
                'firstname' => 'Tchouakpe',
                'lastname' => 'Aubierge',
                'ministry' => 'Choriste',
                'denomination' => "Oasis de Dieu",
                'residence' => "Fidjrossè",
                "commune" => "Cotonou",
                "contact" => "67208812",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADANKON M.',
                'lastname' => 'Etienne',
                'ministry' => 'Pasteur',
                'denomination' => "Mission Evangélique Rehoboth International en Christ (MERIC Bénin)",
                'residence' => "PK 18",
                "commune" => "Sèmè Kpodji",
                "contact" => "97088304",
                "owner" => 1,
            ],
            [
                'firstname' => 'AGOSSOU',
                'lastname' => 'Marcellin',
                'ministry' => 'Pasteur',
                'denomination' => "MIERS Chandelier d’Or",
                'residence' => "Djèrègbé",
                "commune" => "Sèmè Kpodji",
                "contact" => "97374789",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADJAI',
                'lastname' => 'Mathieu',
                'ministry' => 'Pasteur',
                'denomination' => "Mission Evangélique Interenationale du Feu de la Résurrection de Jésus Christ(MEIFRJC)",
                'residence' => "Sèmè Kraké",
                "commune" => "Sèmè Kpodji",
                "contact" => "97638538",
                "owner" => 1,
            ],
            [
                'firstname' => 'KOUTON-AKKI',
                'lastname' => 'Zéssou Roland',
                'ministry' => 'Missionnaire',
                'denomination' => "MIAV",
                'residence' => "Sèmè Kraké",
                "commune" => "Sèmè Kpodji",
                "contact" => "67465103",
                "owner" => 1,
            ],
            [
                'firstname' => 'ZANKLAN G.',
                'lastname' => 'Patrice',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise Evangélique Universelle du Royaume de Dieu (EEURD)",
                'residence' => "Sado",
                "commune" => "Avrankou",
                "contact" => "62455013",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNNOUVI',
                'lastname' => 'EKUNDAYO SAMUEL',
                'ministry' => 'EVANGELISTE',
                'denomination' => "Eglise de Dieu Universelle",
                'residence' => "OKOUN-SEME",
                "commune" => "SEME-PODJI",
                "contact" => "66720269",
                "owner" => 1,
            ],
            [
                'firstname' => 'MEME',
                'lastname' => 'Simon',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise en mission pour le salut",
                'residence' => "Godomey togoudo",
                "commune" => "Calavi",
                "contact" => "67102077",
                "owner" => 1,
            ],
            [
                'firstname' => 'TAMOU',
                'lastname' => 'Myriam',
                'ministry' => 'Musulman',
                'denomination' => "Musulman",
                'residence' => "Fidjossè",
                "commune" => "Cotonou",
                "contact" => "95887026",
                "owner" => 1,
            ],
            [
                'firstname' => 'ATINDEHOU',
                'lastname' => 'Alexice',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise de DIEU JJC Montagne de fortification ",
                'residence' => "Gbèdjromèdé",
                "commune" => "Cotonou",
                "contact" => "94209012",
                "owner" => 1,
            ],
            [
                'firstname' => 'TOGBDJI',
                'lastname' => 'Jacob',
                'ministry' => 'Ancien',
                'denomination' => "Eglise apostolique",
                'residence' => "Cocotomey",
                "commune" => "Calavi",
                "contact" => "95965758",
                "owner" => 1,
            ],
            [
                'firstname' => 'KAKPO',
                'lastname' => 'Mahoudo Marcelin',
                'ministry' => 'Pasteur',
                'denomination' => "ADR",
                'residence' => "Dowa",
                "commune" => "Aguegue",
                "contact" => "60080570",
                "owner" => 1,
            ],
            [
                'firstname' => 'FOLLY',
                'lastname' => 'Amavi Epiphane',
                'ministry' => 'Pasteur',
                'denomination' => "MECS",
                'residence' => "PK 10",
                "commune" => "Sèmè podji",
                "contact" => "96065695",
                "owner" => 1,
            ],
            [
                'firstname' => 'TETEVI KOKO',
                'lastname' => 'Géraldine',
                'ministry' => 'Chantre',
                'denomination' => "MISMA",
                'residence' => "TOGO Lomè",
                "commune" => "Golf",
                "contact" => "90560720",
                "owner" => 1,
            ],
            [
                'firstname' => 'OGOUBIYI',
                'lastname' => 'Théodore',
                'ministry' => 'Pasteur',
                'denomination' => "Christ le Roger",
                'residence' => "Houéyiho",
                "commune" => "Cotonou",
                "contact" => "97470420",
                "owner" => 1,
            ],
            [
                'firstname' => 'ALLOU',
                'lastname' => 'Djamilatou',
                'ministry' => 'Chantre',
                'denomination' => "UEEB",
                'residence' => "N’DALI",
                "commune" => "N’dali",
                "contact" => "67129432",
                "owner" => 1,
            ],
            [
                'firstname' => 'HONSA',
                'lastname' => 'Florent',
                'ministry' => 'Apotre',
                'denomination' => "",
                'residence' => "Djèrègbé",
                "commune" => "Seme podji",
                "contact" => "97485699",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUNGBO',
                'lastname' => 'Noé',
                'ministry' => 'EVANGELISTE',
                'denomination' => "Chapelle des vainqueurs",
                'residence' => "Seme okoun",
                "commune" => "Seme podji",
                "contact" => "66028802",
                "owner" => 1,
            ],
            [
                'firstname' => 'OLOUFOUNMI',
                'lastname' => 'Adéwalé Ulrich',
                'ministry' => 'Prophète',
                'denomination' => "MEPA VIE",
                'residence' => "G0H0",
                "commune" => "ABOMEY",
                "contact" => "65972989",
                "owner" => 1,
            ],
            [
                'firstname' => 'ZOCLI',
                'lastname' => 'Antoine',
                'ministry' => 'Ancien',
                'denomination' => "Eglise de Pentecôte Bénin ",
                'residence' => "Zogbo",
                "commune" => "Cotonou",
                "contact" => "97075833",
                "owner" => 1,
            ],
            [
                'firstname' => 'KAKESSA',
                'lastname' => 'Romance',
                'ministry' => 'Prédicatrice',
                'denomination' => "Charisma",
                'residence' => "Djeffa",
                "commune" => "Seme podji",
                "contact" => "95856258",
                "owner" => 1,
            ],
            [
                'firstname' => 'ANTONIO',
                'lastname' => 'Christelle',
                'ministry' => 'OUVRIERRE',
                'denomination' => "Vie Profonde",
                'residence' => "Porto novo",
                "commune" => "Porto novo",
                "contact" => "97900198",
                "owner" => 1,
            ],
            [
                'firstname' => 'ANTONIO',
                'lastname' => 'Cyrill',
                'ministry' => 'OUVRIER',
                'denomination' => "Vie Profonde",
                'residence' => "Porto novo",
                "commune" => "Porto novo",
                "contact" => "96127858",
                "owner" => 1,
            ],
            [
                'firstname' => 'DAKPO',
                'lastname' => 'Hernaud Louvier',
                'ministry' => 'Prophète',
                'denomination' => "Jésus- Christ est fondation",
                'residence' => "Togba",
                "commune" => "Abomey-Calavi",
                "contact" => "66644994",
                "owner" => 1,
            ],
            [
                'firstname' => 'TCHOHOUND',
                'lastname' => 'O Gisèle',
                'ministry' => 'Evangéliste',
                'denomination' => "MELAC",
                'residence' => "Minantinkpon",
                "commune" => "Ouidah",
                "contact" => "96616793",
                "owner" => 1,
            ],
            [
                'firstname' => 'TCHIBOZO',
                'lastname' => 'André',
                'ministry' => 'Pasteur',
                'denomination' => "MELAC",
                'residence' => "Minantinkpon",
                "commune" => "Ouidah",
                "contact" => "95007071",
                "owner" => 1,
            ],
            [
                'firstname' => 'SANNY',
                'lastname' => 'Wassiatou Olagnika',
                'ministry' => '',
                'denomination' => "Chapelle des vainqueurs",
                'residence' => "",
                "commune" => "",
                "contact" => "97644281",
                "owner" => 1,
            ],
            [
                'firstname' => 'LADEKPO',
                'lastname' => 'Céline',
                'ministry' => '',
                'denomination' => "",
                'residence' => "AGLA",
                "commune" => "Cotonou",
                "contact" => "95000126",
                "owner" => 1,
            ],
            [
                'firstname' => 'AHOLOU',
                'lastname' => 'Kpossi Stéphane',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise Evangélique Don de Dieu",
                'residence' => "Houèzounmè",
                "commune" => "Apro-missérété",
                "contact" => "66471020",
                "owner" => 1,
            ],
            [
                'firstname' => 'N’DUWAYO',
                'lastname' => 'Sammy',
                'ministry' => 'Pasteur',
                'denomination' => "Blessing convention",
                'residence' => "BUJUMBUR A",
                "commune" => "NTAHANG WA",
                "contact" => "25769636255",
                "owner" => 1,
            ],
            [
                'firstname' => 'TODJINOU',
                'lastname' => 'Marlain',
                'ministry' => 'Pasteur',
                'denomination' => "Mission des âmes rachetées par Christ",
                'residence' => "Tori dossou somey",
                "commune" => "Tori bossito",
                "contact" => "96811277",
                "owner" => 1,
            ],
            [
                'firstname' => 'KOULONIM',
                'lastname' => 'Lalétéba Déborah',
                'ministry' => 'Evangéliste',
                'denomination' => "CEFORD TOGO",
                'residence' => "Kponou",
                "commune" => "HAHO",
                "contact" => "22897874353",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUENOU',
                'lastname' => 'Bruno',
                'ministry' => 'Apotre',
                'denomination' => "MCAV",
                'residence' => "Calavi",
                "commune" => "Calavi",
                "contact" => "97643248",
                "owner" => 1,
            ],
            [
                'firstname' => 'AGBO',
                'lastname' => 'Sylvie',
                'ministry' => 'Monitrice',
                'denomination' => "Mission Evangélique Pain de Vie",
                'residence' => "DOKPA",
                "commune" => "Abomey",
                "contact" => "90673231",
                "owner" => 1,
            ],
            [
                'firstname' => 'DEDEWANOU',
                'lastname' => 'J. Claude',
                'ministry' => 'Evangéliste',
                'denomination' => "ENAAC",
                'residence' => "Malé",
                "commune" => "Avrankou",
                "contact" => "62196752",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUSSOU',
                'lastname' => 'Odette',
                'ministry' => 'Pasteur',
                'denomination' => "MCGE",
                'residence' => "Sèmè okoun",
                "commune" => "Sèmè Podji",
                "contact" => "62196752",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADEYI',
                'lastname' => 'Euloge',
                'ministry' => 'APOTRE',
                'denomination' => "AJC",
                'residence' => "Djègandaho",
                "commune" => "Porto-novo",
                "contact" => "97148953",
                "owner" => 1,
            ],
            [
                'firstname' => 'HOUEDANOU',
                'lastname' => 'Elise',
                'ministry' => 'APOTRE',
                'denomination' => "La Nouvelle Jérusalem",
                'residence' => "LOKOSSA",
                "commune" => "",
                "contact" => "95559364",
                "owner" => 1,
            ],
            [
                'firstname' => 'TOGBE SOSSA',
                'lastname' => 'Gérard',
                'ministry' => 'Prophète',
                'denomination' => "MIPSEA",
                'residence' => "Porto novo",
                "commune" => "Porto novo",
                "contact" => "97737041",
                "owner" => 1,
            ],
            [
                'firstname' => 'DEGBE ABAGNON',
                'lastname' => 'Ignace',
                'ministry' => 'Pasteur',
                'denomination' => "Miel",
                'residence' => "Djègan-daho",
                "commune" => "Porto novo",
                "contact" => "96466252",
                "owner" => 1,
            ],
            [
                'firstname' => 'ADEYEMI Dourodjaye',
                'lastname' => 'Clarisse',
                'ministry' => 'Pasteur',
                'denomination' => "Eglise évangélque des apotres du Christ",
                'residence' => "Ketou",
                "commune" => "Ketou",
                "contact" => "96820890",
                "owner" => 1,
            ],
            [
                'firstname' => 'ASSOGBA',
                'lastname' => 'Paul',
                'ministry' => 'Enseignante',
                'denomination' => "MEPPSE",
                'residence' => "Cotonou",
                "commune" => "Cotonou",
                "contact" => "97889132",
                "owner" => 1,
            ],
            [
                'firstname' => 'DOSSOU',
                'lastname' => 'Antoine',
                'ministry' => 'Pasteur',
                'denomination' => "Ministère international",
                'residence' => "Houedo",
                "commune" => "Calavi",
                "contact" => "66451623",
                "owner" => 1,
            ],

            // JE M'ARRETE LA D'ABORD à l'ID :126
        ];
        foreach ($repertoires as $repertoire) {
            \App\Models\Repertory::factory()->create($repertoire);
        };

        ##======== CREATION DES FONCTIONS PAR DEFAUT ============####
        $fonctions = [
            [
                "label" => "PDG",
            ],
            [
                "label" => "Administrateur Général",
            ],
            [
                "label" => "Administrateur",
            ],
            [
                "label" => "Gérant",
            ],
            [
                "label" => "Co-Gérant",
            ],
        ];
        foreach ($fonctions as $fonction) {
            \App\Models\Fonction::factory()->create($fonction);
        };

        ##======== CREATION DES POSTES PAR DEFAUT ============####
        $postes = [
            [
                "label" => "Président",
            ],
            [
                "label" => "Vice-Président",
            ],
            [
                "label" => "Premier vice Président",
            ],
            [
                "label" => "Adjoint",
            ]
        ];
        foreach ($postes as $poste) {
            \App\Models\Poste::factory()->create($poste);
        };
    }
}
