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
                "rang_id" => \App\Models\Rang::find(1),
                "profil_id" => \App\Models\Profil::find(9),
                'is_super_admin' => true,
                'phone' => "22961765591",

                'is_admin' => true,
                'compte_actif' => true,
            ],
            [
                'name' => 'Joel PPJ',
                'username' => 'ppjjoel',
                'email' => 'ppjjoel@gmail.com',
                'password' => '$2y$10$ZT2msbcfYEUWGUucpnrHwekWMBDe1H0zGrvB.pzQGpepF8zoaGIMC', #ppjjoel
                "rang_id" => \App\Models\Rang::find(1),
                "profil_id" => \App\Models\Profil::find(9),
                'is_super_admin' => true,
                'phone' => "22961765592",

                'is_admin' => true,
                'compte_actif' => true,
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
                'label' => 'is_marketer',
                'description' => 'Le rôle d\'un marketeur'
            ],
            [
                'label' => 'is_exploitation',
                'description' => 'Le rôle d\'une exploitation'
            ],
            [
                'label' => 'is_supervisor',
                'description' => 'Le rôle d\'un superviseur'
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

        ##======== CREATION DES COUNTRYS ============####
        $countries = [
            [
                "name" => "Afrique du Sud",
                "prefix" => "Président",
            ],
            [
                "name" => "Algérie",
            ],
            [
                "name" => "Angola",
            ],
            [
                "name" => "Bénin",
                "prefix" => "229",
                "code" => "BJ",
            ],
            [
                "name" => "Botswana",
            ],
            [
                "name" => "Burkina Faso",
            ],
            [
                "name" => "Burundi",
            ],
            [
                "name" => "Cameroun",
            ],
            [
                "name" => "Cap-Vert",
            ],
            [
                "name" => "Centrafrique",
            ],
            [
                "name" => "Comores",
            ],
            [
                "name" => "Congo",
            ],
            [
                "name" => "Côte d'Ivoire",
            ],
            [
                "name" => "Djibouti",
            ],
            [
                "name" => "Egypte",
            ],
            [
                "name" => "Erythrée",
            ],
            [
                "name" => "Ethiopie",
            ],
            [
                "name" => "Gabon",
            ],
            [
                "name" => "Gambie",
            ],
            [
                "name" => "Ghana",
            ],
            [
                "name" => "Guinée",
            ],
            [
                "name" => "Guinée-Bissau",
            ],
            [
                "name" => "Guinée Equatoriale",
            ],
            [
                "name" => "Kenya",
            ],
            [
                "name" => "Lesotho",
            ],

            [
                "name" => "Libéria",
            ],
            [
                "name" => "Libye",
            ],
            [
                "name" => "Madagascar",
            ],
            [
                "name" => "Malawi",
            ],
            [
                "name" => "Mali",
            ],
            [
                "name" => "Maroc",
            ],
            [
                "name" => "Maurice",
            ],


            [
                "name" => "Mauritanie",
            ],
            [
                "name" => "Mozambique",
            ],
            [
                "name" => "Namibie",
            ],
            [
                "name" => "Niger",
            ],
            [
                "name" => "Nigéria",
            ],
            [
                "name" => "Ouganda",
            ],
            [
                "name" => "RD du Congo",
            ],
            [
                "name" => "Rwanda",
            ],
            [
                "name" => "Sao Tomé et Principe",
            ],
            [
                "name" => "Sénégal",
            ],
            [
                "name" => "Seychelles",
            ],
            [
                "name" => "Sierra Leone",
            ],
            [
                "name" => "Somalie",
            ],
            [
                "name" => "Soudan",
            ],
            [
                "name" => "Soudan du Sud",
            ],
            [
                "name" => "Swaziland",
            ],
            [
                "name" => "Tanzanie",
            ],
            [
                "name" => "Tchad",
            ],
            [
                "name" => "Togo",
            ],
            [
                "name" => "Tunisie",
            ],
            [
                "name" => "Zambie",
            ],
            [
                "name" => "Zimbabwé",
            ],
        ];
        foreach ($countries as $countrie) {
            \App\Models\Country::factory()->create($countrie);
        };

        ##======== CREATION DES DOMAINES D'ACTIVITES ============####
        $activities_domains = [
            [
                "label" => "Agroalimentaire",
            ],
            [
                "label" => "Banque / Assurance",
            ],
            [
                "label" => "Bois / Papier / Carton / Imprimerie",
            ],
            [
                "label" => "BTP / Matériaux de construction",
            ],
            [
                "label" => "Chimie / Parachimie  Commerce / Négoce / Distribution",
            ],
            [
                "label" => "Édition / Communication / Multimédia",
            ],
            [
                "label" => "Électronique / Électricité",
            ],

            [
                "label" => "Études et conseils",
            ],
            [
                "label" => "Industrie pharmaceutique",
            ],
            [
                "label" => "Informatique / Télécoms",
            ],
            [
                "label" => "Machines et équipements / Automobile",
            ],
            [
                "label" => "Métallurgie / Travail du métal",
            ],
            [
                "label" => "Plastique / Caoutchouc",
            ],
            [
                "label" => "Services aux entreprises",
            ],
            [
                "label" => "Textile / Habillement / Chaussure",
            ],
            [
                "label" => "Transports / Logistique",
            ],
            [
                "label" => "Libéral",
            ],
            [
                "label" => "Fonctionnaire",
            ],
            [
                "label" => "Communauté",
            ],
            [
                "label" => "Autre",
            ],
        ];
        foreach ($activities_domains as $activities_domain) {
            \App\Models\ActivityDomain::factory()->create($activities_domain);
        };

        ##======== CREATION DES CITIES ============####
        $cities = [

            [
                "name" => "Kandi",
                "country" => 4,
            ],
            [
                "name" => "Malanville",
                "country" => 4,
            ],
            [
                "name" => "Karimama",
                "country" => 4,
            ],
            [
                "name" => "Banikoara",
                "country" => 4,
            ],
            [
                "name" => "Gogounou",
                "country" => 4,
            ],
            [
                "name" => "Ségbana",
                "country" => 4,
            ],

            [
                "name" => "Boukoumbé",
                "country" => 4,
            ],
            [
                "name" => "Cobly",
                "country" => 4,
            ],
            [
                "name" => "Matéri",
                "country" => 4,
            ],
            [
                "name" => "Tanguiéta",
                "country" => 4,
            ],
            [
                "name" => "Kérou",
                "country" => 4,
            ],
            [
                "name" => "Kouandé",
                "country" => 4,
            ],
            [
                "name" => "Natitingou",
                "country" => 4,
            ],

            [
                "name" => "Ouassa-Pehunco",
                "country" => 4,
            ],
            [
                "name" => "Toukountouna",
                "country" => 4,
            ],
            [
                "name" => "Allada",
                "country" => 4,
            ],
            [
                "name" => "Kpomassè",
                "country" => 4,
            ],



            [
                "name" => "Ouidah",
                "country" => 4,
            ],
            [
                "name" => "Toffo",
                "country" => 4,
            ],
            [
                "name" => "Tori-Bossito",
                "country" => 4,
            ],
            [
                "name" => "Abomey-Calavi",
                "country" => 4,
            ],
            [
                "name" => "Sô-Ava",
                "country" => 4,
            ],
            [
                "name" => "Bèmbèrèkè",
                "country" => 4,
            ],
            [
                "name" => "Nikki",
                "country" => 4,
            ],
            [
                "name" => "Sinendé",
                "country" => 4,
            ],




            [
                "name" => "Kalalé",
                "country" => 4,
            ],
            [
                "name" => "Parakou",
                "country" => 4,
            ],
            [
                "name" => "N'Dali",
                "country" => 4,
            ],
            [
                "name" => "Pèrèrè",
                "country" => 4,
            ],
            [
                "name" => "Tchaourou",
                "country" => 4,
            ],
            [
                "name" => "Bantè",
                "country" => 4,
            ],
            [
                "name" => "Dassa-Zoumè",
                "country" => 4,
            ],
            [
                "name" => "Savalou",
                "country" => 4,
            ],
            [
                "name" => "Glazoué",
                "country" => 4,
            ],
            [
                "name" => "Ouèssè",
                "country" => 4,
            ],
            [
                "name" => "Savè",
                "country" => 4,
            ],
            [
                "name" => "Aplahoué",
                "country" => 4,
            ],
            [
                "name" => "Djakotomey",
                "country" => 4,
            ],
            [
                "name" => "Klouékanmè",
                "country" => 4,
            ],


            [
                "name" => "Dogbo",
                "country" => 4,
            ],
            [
                "name" => "Lalo",
                "country" => 4,
            ],
            [
                "name" => "Toviklin",
                "country" => 4,
            ],
            [
                "name" => "Djougou",
                "country" => 4,
            ],
            [
                "name" => "Bassila",
                "country" => 4,
            ],

            [
                "name" => "Copargo",
                "country" => 4,
            ],
            [
                "name" => "Ouaké",
                "country" => 4,
            ],
            [
                "name" => "Cotonou",
                "country" => 4,
            ],
            [
                "name" => "Athiémè",
                "country" => 4,
            ],
            [
                "name" => "Comè",
                "country" => 4,
            ],
            [
                "name" => "Grand-Popo",
                "country" => 4,
            ],

            [
                "name" => "Bopa",
                "country" => 4,
            ],
            [
                "name" => "Houeyogbé",
                "country" => 4,
            ],
            [
                "name" => "Lokossa",
                "country" => 4,
            ],
            [
                "name" => "Porto-Novo",
                "country" => 4,
            ],
            [
                "name" => "Adjarra",
                "country" => 4,
            ],
            [
                "name" => "Aguégués",
                "country" => 4,
            ],


            [
                "name" => "Sèmè-Podji",
                "country" => 4,
            ],
            [
                "name" => "Adjohoun",
                "country" => 4,
            ],
            [
                "name" => "Akpro-Misserété",
                "country" => 4,
            ],
            [
                "name" => "Avrankou",
                "country" => 4,
            ],
            [
                "name" => "Aguégués",
                "country" => 4,
            ],
            [
                "name" => "Bonou",
                "country" => 4,
            ],
            [
                "name" => "Dangbo",
                "country" => 4,
            ],
            [
                "name" => "Adja-Ouèrè",
                "country" => 4,
            ],
            [
                "name" => "Ifangni",
                "country" => 4,
            ],
            [
                "name" => "Sakété",
                "country" => 4,
            ],
            [
                "name" => "Kétou",
                "country" => 4,
            ],
            [
                "name" => "Pobè",
                "country" => 4,
            ],
            [
                "name" => "Abomey",
                "country" => 4,
            ],
            [
                "name" => "Agbangnizoun",
                "country" => 4,
            ],
            [
                "name" => "Bohicon",
                "country" => 4,
            ],
            [
                "name" => "Covè",
                "country" => 4,
            ],
            [
                "name" => "Ouinhi",
                "country" => 4,
            ],
            [
                "name" => "Zagnanado",
                "country" => 4,
            ],
            [
                "name" => "Za-Kpota",
                "country" => 4,
            ],
            [
                "name" => "Ouagadougou",
                "country" => 6,
            ],

            [
                "name" => "Bobo-Dioulasso",
                "country" => 6,
            ],
            [
                "name" => "Koudougou",
                "country" => 6,
            ],
            [
                "name" => "Banfora",
                "country" => 6,
            ],
            [
                "name" => "Ouahigouya",
                "country" => 6,
            ],
            [
                "name" => "Dédougou",
                "country" => 6,
            ],
            [
                "name" => "Kaya",
                "country" => 6,
            ],


            [
                "name" => "Tenkodogo",
                "country" => 6,
            ],
            [
                "name" => "Fada N'Gourma",
                "country" => 6,
            ],


            [
                "name" => "Port Louis",
                "country" => 32,
            ],
            [
                "name" => "Beau-Bassin Rose-Hill",
                "country" => 32,
            ],
            [
                "name" => "Vacoas-Phœnix",
                "country" => 32,
            ],
            [
                "name" => "Curepipe",
                "country" => 32,
            ],
            [
                "name" => "Quatre Bornes",
                "country" => 32,
            ],
            [
                "name" => "Trou-aux-Biches",
                "country" => 32,
            ],
            [
                "name" => "Centre de Flacq",
                "country" => 32,
            ],
            [
                "name" => "Bel Air",
                "country" => 32,
            ],
            [
                "name" => "Mahébourg",
                "country" => 32,
            ],
            [
                "name" => "Saint-Pierre",
                "country" => 32,
            ],
            [
                "name" => "Le Hochet",
                "country" => 32,
            ],



            [
                "name" => "Baie du Tombeau",
                "country" => 32,
            ],
            [
                "name" => "Bambous",
                "country" => 32,
            ],
            [
                "name" => "Rose-Belle",
                "country" => 32,
            ],
            [
                "name" => "Chemin Grenier",
                "country" => 32,
            ],
            [
                "name" => "Rivière du Rempart",
                "country" => 32,
            ],
            [
                "name" => "Grand Baie",
                "country" => 32,
            ],
            [
                "name" => "Plaine Magnien",
                "country" => 32,
            ],
            [
                "name" => "Pailles",
                "country" => 32,
            ],


            [
                "name" => "Surinam",
                "country" => 32,
            ],
            [
                "name" => "Lalmatie",
                "country" => 32,
            ],
            [
                "name" => "New Grove",
                "country" => 32,
            ],
            [
                "name" => "Rivière des Anguilles",
                "country" => 32,
            ],
            [
                "name" => "Terre Rouge",
                "country" => 32,
            ],
            [
                "name" => "Petit Raffray",
                "country" => 32,
            ],
            [
                "name" => "Moka",
                "country" => 32,
            ],
            [
                "name" => "Pamplemousses",
                "country" => 32,
            ],
            [
                "name" => "Montagne Blanche",
                "country" => 32,
            ],
            [
                "name" => "L'Escalier",
                "country" => 32,
            ],
            [
                "name" => "Goodlands",
                "country" => 32,
            ],
            [
                "name" => "Rivière Noire",
                "country" => 32,
            ],
            [
                "name" => "Flic en Flac",
                "country" => 32,
            ],
            [
                "name" => "Poste de Flacq",
                "country" => 32,
            ],
            [
                "name" => "Yaoundé",
                "country" => 8,
            ],
            [
                "name" => "Douala",
                "country" => 8,
            ],
            [
                "name" => "Garoua",
                "country" => 8,
            ],
            [
                "name" => "Bamenda",
                "country" => 32,
            ],
            [
                "name" => "Maroua",
                "country" => 8,
            ],
            [
                "name" => "Maroua",
                "country" => 8,
            ],
            [
                "name" => "Nkongsamba",
                "country" => 8,
            ],


            [
                "name" => "Bafoussam",
                "country" => 8,
            ],
            [
                "name" => "Ngaoundéré",
                "country" => 8,
            ],
            [
                "name" => "Bertoua",
                "country" => 8,
            ],
            [
                "name" => "Loum",
                "country" => 8,
            ],
            [
                "name" => "Edéa",
                "country" => 8,
            ],



            [
                "name" => "Niamey",
                "country" => 36,
            ],
            [
                "name" => "Zinder",
                "country" => 36,
            ],
            [
                "name" => "Maradi",
                "country" => 36,
            ],
            [
                "name" => "Tessaoua",
                "country" => 36,
            ],
            [
                "name" => "Birni N'Konni",
                "country" => 36,
            ],
            [
                "name" => "Aguié",
                "country" => 36,
            ],
            [
                "name" => "Tanout",
                "country" => 36,
            ],
            [
                "name" => "Illéla",
                "country" => 36,
            ],
            [
                "name" => "Agadez",
                "country" => 36,
            ],
            [
                "name" => "Tahoua",
                "country" => 36,
            ],



            [
                "name" => "Accra",
                "country" => 20,
            ],
            [
                "name" => "Kumasi",
                "country" => 20,
            ],
            [
                "name" => "Tamale",
                "country" => 20,
            ],
            [
                "name" => "Sekondi-Takoradi",
                "country" => 20,
            ],
            [
                "name" => "Ashaiman",
                "country" => 20,
            ],
            [
                "name" => "Sunyani",
                "country" => 20,
            ],
            [
                "name" => "Cape Coast",
                "country" => 20,
            ],
            [
                "name" => "Obuasi",
                "country" => 20,
            ],
            [
                "name" => "Teshie",
                "country" => 20,
            ],
            [
                "name" => "Tema",
                "country" => 20,
            ],
            [
                "name" => "Madina",
                "country" => 20,
            ],
            [
                "name" => "Koforidua",
                "country" => 20,
            ],
            [
                "name" => "Wa",
                "country" => 20,
            ],
            [
                "name" => "Techiman",
                "country" => 20,
            ],
            [
                "name" => "Ho",
                "country" => 20,
            ],



            [
                "name" => "Nungua",
                "country" => 20,
            ],
            [
                "name" => "Lashibi",
                "country" => 20,
            ],
            [
                "name" => "Dome",
                "country" => 20,
            ],
            [
                "name" => "Tema New Town",
                "country" => 20,
            ],
            [
                "name" => "Gbawe",
                "country" => 20,
            ],
            [
                "name" => "Banjul",
                "country" => 19,
            ],
            [
                "name" => "Brikama",
                "country" => 19,
            ],
            [
                "name" => "Bakau",
                "country" => 19,
            ],
            [
                "name" => "Serrekunda ",
                "country" => 19,
            ],
            [
                "name" => "Farafenni",
                "country" => 19,
            ],
            [
                "name" => "Kinshasa",
                "country" => 39,
            ],
            [
                "name" => "Lubumbashi",
                "country" => 39,
            ],




            [
                "name" => "Mbuji-Mayi",
                "country" => 39,
            ],
            [
                "name" => "Kananga",
                "country" => 39,
            ],
            [
                "name" => "Kisangani",
                "country" => 39,
            ],
            [
                "name" => "Bukavu",
                "country" => 39,
            ],
            [
                "name" => "Tshikapa",
                "country" => 39,
            ],
            [
                "name" => "Kolwezi",
                "country" => 39,
            ],
            [
                "name" => "Likasi",
                "country" => 39,
            ],
            [
                "name" => "Goma",
                "country" => 39,
            ],
            [
                "name" => "Kikwit",
                "country" => 39,
            ],
            [
                "name" => "Uvira",
                "country" => 39,
            ],
            [
                "name" => "Bunia",
                "country" => 39,
            ],
            [
                "name" => "Kalemie",
                "country" => 39,
            ],
            [
                "name" => "Mbandaka",
                "country" => 39,
            ],
            [
                "name" => "Matadi",
                "country" => 39,
            ],


            [
                "name" => "Kabinda",
                "country" => 39,
            ],
            [
                "name" => "Butembo",
                "country" => 39,
            ],
            [
                "name" => "Baraka",
                "country" => 39,
            ],
            [
                "name" => "Mwene-Ditu",
                "country" => 39,
            ],
            [
                "name" => "Isiro",
                "country" => 39,
            ],
            [
                "name" => "Kindu",
                "country" => 39,
            ],
            [
                "name" => "Boma",
                "country" => 39,
            ],
            [
                "name" => "Kamina",
                "country" => 39,
            ],
            [
                "name" => "Gandajika",
                "country" => 39,
            ],
            [
                "name" => "Bandundu",
                "country" => 39,
            ],
            [
                "name" => "Gemena",
                "country" => 39,
            ],
            [
                "name" => "Kipushi",
                "country" => 39,
            ],
            [
                "name" => "Bumba",
                "country" => 39,
            ],
            [
                "name" => "Mbanza-Ngungu",
                "country" => 39,
            ],
            [
                "name" => "Bikoro",
                "country" => 39,
            ],
            [
                "name" => "Boende",
                "country" => 39,
            ],
            [
                "name" => "Gbadolite",
                "country" => 39,
            ],
            [
                "name" => "Beni",
                "country" => 39,
            ],
            [
                "name" => "Zongo",
                "country" => 39,
            ],



            [
                "name" => "N'Djaména",
                "country" => 50,
            ],
            [
                "name" => "Moundou",
                "country" => 50,
            ],
            [
                "name" => "Sarh",
                "country" => 50,
            ],




            [
                "name" => "Bamako",
                "country" => 30,
            ],
            [
                "name" => "Sikasso",
                "country" => 30,
            ],
            [
                "name" => "Mopti",
                "country" => 30,
            ],
            [
                "name" => "Koutiala",
                "country" => 30,
            ],
            [
                "name" => "Kayes",
                "country" => 30,
            ],
            [
                "name" => "Ségou",
                "country" => 30,
            ],



            [
                "name" => "Abidjan",
                "country" => 13,
            ],
            [
                "name" => "Bouaké",
                "country" => 13,
            ],
            [
                "name" => "Daloa",
                "country" => 13,
            ],
            [
                "name" => "Yamoussoukro",
                "country" => 13,
            ],
            [
                "name" => "San-Pédro",
                "country" => 13,
            ],
            [
                "name" => "Divo",
                "country" => 13,
            ],
            [
                "name" => "Korhogo",
                "country" => 13,
            ],
            [
                "name" => "Anyama",
                "country" => 13,
            ],
            [
                "name" => "Abengourou",
                "country" => 13,
            ],
            [
                "name" => "Man",
                "country" => 13,
            ],
            [
                "name" => "Gagnoa",
                "country" => 13,
            ],
            [
                "name" => "Agboville",
                "country" => 13,
            ],
            [
                "name" => "Dabou",
                "country" => 13,
            ],
            [
                "name" => "Grand-Bassam",
                "country" => 13,
            ],
            [
                "name" => "Lagos",
                "country" => 37,
            ],
            [
                "name" => "Kano",
                "country" => 37,
            ],
            [
                "name" => "Ibadan",
                "country" => 37,
            ],
            [
                "name" => "Kaduna",
                "country" => 37,
            ],
            [
                "name" => "Port Harcourt",
                "country" => 37,
            ],
            [
                "name" => "Maiduguri",
                "country" => 37,
            ],
            [
                "name" => "Benin City",
                "country" => 37,
            ],
            [
                "name" => "Zaria",
                "country" => 37,
            ],
            [
                "name" => "Aba",
                "country" => 13,
            ],
            [
                "name" => "Jos",
                "country" => 37,
            ],
            [
                "name" => "Ilorin",
                "country" => 37,
            ],
            [
                "name" => "Enugu",
                "country" => 37,
            ],
            [
                "name" => "Onitsha",
                "country" => 37,
            ],
            [
                "name" => "Warri",
                "country" => 37,
            ],
            [
                "name" => "Oshogbo",
                "country" => 37,
            ],
            [
                "name" => "Akure",
                "country" => 37,
            ],
            [
                "name" => "Ikorodu",
                "country" => 37,
            ],
            [
                "name" => "Umuahia",
                "country" => 37,
            ],
            [
                "name" => "Owerri",
                "country" => 37,
            ],
            [
                "name" => "Nnewi",
                "country" => 37,
            ],



            [
                "name" => "Dakar",
                "country" => 42,
            ],
            [
                "name" => "Pikine",
                "country" => 42,
            ],
            [
                "name" => "Touba",
                "country" => 42,
            ],
            [
                "name" => "Guédiawaye",
                "country" => 42,
            ],
            [
                "name" => "Thiès",
                "country" => 42,
            ],
            [
                "name" => "Kaolack",
                "country" => 42,
            ],
            [
                "name" => "Mbour",
                "country" => 42,
            ],
            [
                "name" => "Saint-Louis",
                "country" => 42,
            ],
            [
                "name" => "Rufisque",
                "country" => 42,
            ],
            [
                "name" => "Ziguinchor",
                "country" => 42,
            ],



            [
                "name" => "Antananarive",
                "country" => 28,
            ],
            [
                "name" => "Tamatave",
                "country" => 28,
            ],
            [
                "name" => "Antsirabé",
                "country" => 28,
            ],
            [
                "name" => "Fianarantsoa",
                "country" => 28,
            ],
            [
                "name" => "Majunga",
                "country" => 28,
            ],
            [
                "name" => "Tuléar",
                "country" => 28,
            ],
            [
                "name" => "Diego-Suarez",
                "country" => 28,
            ],
            [
                "name" => "Antanifotsy",
                "country" => 28,
            ],
            [
                "name" => "Ambovombe",
                "country" => 28,
            ],
            [
                "name" => "Amparafaravola",
                "country" => 28,
            ],
            [
                "name" => "Brazzaville",
                "country" => 12,
            ],
            [
                "name" => "Pointe-Noire",
                "country" => 12,
            ],
            [
                "name" => "Dolisie",
                "country" => 12,
            ],
            [
                "name" => "Nkayi",
                "country" => 12,
            ],
            [
                "name" => "Ouesso",
                "country" => 12,
            ],
            [
                "name" => "Madingou",
                "country" => 12,
            ],
            [
                "name" => "Impfondo",
                "country" => 12,
            ],
            [
                "name" => "Kigali",
                "country" => 40,
            ],
            [
                "name" => "Butare",
                "country" => 40,
            ],
            [
                "name" => "Gitarama",
                "country" => 40,
            ],
            [
                "name" => "Ruhengeri",
                "country" => 40,
            ],
            [
                "name" => "Gisenyi",
                "country" => 40,
            ],
            [
                "name" => "Byumba",
                "country" => 40,
            ],
            [
                "name" => "Cyangugu",
                "country" => 40,
            ],
            [
                "name" => "Nyanza",
                "country" => 40,
            ],
            [
                "name" => "Kabuga",
                "country" => 40,
            ],
            [
                "name" => "Ruhango",
                "country" => 40,
            ],


            [
                "name" => "Addis-Abeba",
                "country" => 17,
            ],
            [
                "name" => "Dire Dawa",
                "country" => 17,
            ],
            [
                "name" => "Adama",
                "country" => 17,
            ],
            [
                "name" => "Gondar",
                "country" => 17,
            ],
            [
                "name" => "Mekele",
                "country" => 17,
            ],
            [
                "name" => "Dessie",
                "country" => 17,
            ],
            [
                "name" => "Baher Dar",
                "country" => 17,
            ],
            [
                "name" => "Jimma",
                "country" => 17,
            ],
            [
                "name" => "Debre Zeit",
                "country" => 17,
            ],
            [
                "name" => "Awasa",
                "country" => 17,
            ],



            [
                "name" => "Libreville",
                "country" => 18,
            ],
            [
                "name" => "Port-Gentil",
                "country" => 18,
            ],
            [
                "name" => "Franceville",
                "country" => 18,
            ],
            [
                "name" => "Oyem",
                "country" => 18,
            ],
            [
                "name" => "Moanda",
                "country" => 18,
            ],
            [
                "name" => "Mouila",
                "country" => 18,
            ],
            [
                "name" => "Lambaréné",
                "country" => 18,
            ],
            [
                "name" => "Tchibanga",
                "country" => 18,
            ],






            [
                "name" => "Nairobi",
                "country" => 24,
            ],
            [
                "name" => "Mombasa",
                "country" => 24,
            ],
            [
                "name" => "Kisumu",
                "country" => 24,
            ],
            [
                "name" => "Nakuru",
                "country" => 24,
            ],
            [
                "name" => "Eldoret",
                "country" => 24,
            ],
            [
                "name" => "Ruiru",
                "country" => 24,
            ],
            [
                "name" => "Machakos",
                "country" => 24,
            ],
            [
                "name" => "Meru",
                "country" => 24,
            ],
            [
                "name" => "Nyeri",
                "country" => 24,
            ],
            [
                "name" => "Kitale",
                "country" => 24,
            ],





            [
                "name" => "Casablanca",
                "country" => 31,
            ],
            [
                "name" => "Fès",
                "country" => 31,
            ],
            [
                "name" => "Salé",
                "country" => 31,
            ],
            [
                "name" => "Tanger",
                "country" => 31,
            ],
            [
                "name" => "Marrakech",
                "country" => 31,
            ],
            [
                "name" => "Meknès",
                "country" => 31,
            ],
            [
                "name" => "Rabat",
                "country" => 31,
            ],
            [
                "name" => "Oujda",
                "country" => 31,
            ],
            [
                "name" => "Kénitra",
                "country" => 31,
            ],
            [
                "name" => "Agadir",
                "country" => 31,
            ],
            [
                "name" => "Tétouan",
                "country" => 31,
            ],
            [
                "name" => "Témara",
                "country" => 31,
            ],
            [
                "name" => "Safi",
                "country" => 31,
            ],
            [
                "name" => "Mohammédia",
                "country" => 31,
            ],
            [
                "name" => "Khouribga",
                "country" => 31,
            ],
            [
                "name" => "El Jadida",
                "country" => 31,
            ],
            [
                "name" => "Béni Mellal",
                "country" => 31,
            ],
            [
                "name" => "Taza",
                "country" => 31,
            ],
            [
                "name" => "Khémisset",
                "country" => 31,
            ],
            [
                "name" => "Taourirt",
                "country" => 31,
            ],




            [
                "name" => "Bangui",
                "country" => 10,
            ],
            [
                "name" => "Bimbo",
                "country" => 10,
            ],
            [
                "name" => "Berbérati",
                "country" => 10,
            ],
            [
                "name" => "Carnot",
                "country" => 10,
            ],
            [
                "name" => "Bambari",
                "country" => 10,
            ],
            [
                "name" => "Bouar",
                "country" => 10,
            ],





            [
                "name" => "Moroni",
                "country" => 11,
            ],
            [
                "name" => "Mutsamudu",
                "country" => 11,
            ],
            [
                "name" => "Domoni",
                "country" => 11,
            ],
            [
                "name" => "Fomboni",
                "country" => 11,
            ],
            [
                "name" => "Tsémbehou",
                "country" => 11,
            ],
            [
                "name" => "Bujumbura",
                "country" => 7,
            ],
            [
                "name" => "Muyinga",
                "country" => 7,
            ],
            [
                "name" => "Ruyigi",
                "country" => 7,
            ],
            [
                "name" => "Gitega",
                "country" => 7,
            ],
            [
                "name" => "Ngozi",
                "country" => 7,
            ],
            [
                "name" => "Makamba",
                "country" => 7,
            ],
            [
                "name" => "Cibitoke",
                "country" => 7,
            ],
            [
                "name" => "Rumonge",
                "country" => 7,
            ],
            [
                "name" => "Gaborone",
                "country" => 5,
            ],
            [
                "name" => "Francistown",
                "country" => 5,
            ],
            [
                "name" => "Molepolole",
                "country" => 5,
            ],
            [
                "name" => "Selebi-Phikwe",
                "country" => 5,
            ],
            [
                "name" => "Maun",
                "country" => 5,
            ],
            [
                "name" => "Djibouti",
                "country" => 14,
            ],
            [
                "name" => "Ali Sabieh",
                "country" => 14,
            ],
            [
                "name" => "Tadjourah",
                "country" => 14,
            ],
            [
                "name" => "Obock",
                "country" => 14,
            ],
            [
                "name" => "Dikhil",
                "country" => 14,
            ],
            [
                "name" => "Monrovia",
                "country" => 26,
            ],
            [
                "name" => "Ganta",
                "country" => 26,
            ],
            [
                "name" => "Buchanan",
                "country" => 26,
            ],
            [
                "name" => "Gbarnga",
                "country" => 26,
            ],
            [
                "name" => "Kakata",
                "country" => 26,
            ],
            [
                "name" => "Victoria",
                "country" => 43,
            ],
            [
                "name" => "De Quincey",
                "country" => 43,
            ],
            [
                "name" => "Anse Boileau",
                "country" => 43,
            ],
            [
                "name" => "Beau Vallon",
                "country" => 43,
            ],
            [
                "name" => "Anse Royale",
                "country" => 43,
            ],
            [
                "name" => "Belombre",
                "country" => 43,
            ],
            [
                "name" => "Cascade",
                "country" => 43,
            ],
            [
                "name" => "Machabee",
                "country" => 43,
            ],
            [
                "name" => "Grand Anse",
                "country" => 43,
            ],
            [
                "name" => "Misere",
                "country" => 43,
            ],
            [
                "name" => "Takamaka",
                "country" => 43,
            ],
            [
                "name" => "Port Glaud",
                "country" => 43,
            ],
            [
                "name" => "La Réunion",
                "country" => 43,
            ],
            [
                "name" => "Cape Town",
                "country" => 1,
            ],
            [
                "name" => "Durban",
                "country" => 1,
            ],
            [
                "name" => "Johannesburg",
                "country" => 1,
            ],
            [
                "name" => "Soweto",
                "country" => 1,
            ],
            [
                "name" => "Pretoria",
                "country" => 1,
            ],
            [
                "name" => "Port Elizabeth",
                "country" => 1,
            ],
            [
                "name" => "Pietermaritzburg",
                "country" => 1,
            ],
            [
                "name" => "Benoni",
                "country" => 1,
            ],
            [
                "name" => "Tembisa",
                "country" => 1,
            ],
            [
                "name" => "Vereeniging",
                "country" => 1,
            ],
            [
                "name" => "Bloemfontein",
                "country" => 1,
            ],
            [
                "name" => "Boksburg",
                "country" => 1,
            ],
            [
                "name" => "Welkom",
                "country" => 1,
            ],
            [
                "name" => "Newcastle",
                "country" => 1,
            ],
            [
                "name" => "East London",
                "country" => 1,
            ],
            [
                "name" => "Maseru",
                "country" => 25,
            ],
            [
                "name" => "Hlotse",
                "country" => 25,
            ],
            [
                "name" => "Mohale's Hoek",
                "country" => 25,
            ],
            [
                "name" => "Manzini",
                "country" => 48,
            ],
            [
                "name" => "Mbabane",
                "country" => 48,
            ],
            [
                "name" => "Big Bend",
                "country" => 48,
            ],
            [
                "name" => "Malkerns",
                "country" => 48,
            ],
            [
                "name" => "Nhlangano",
                "country" => 48,
            ],


            [
                "name" => "São Tomé",
                "country" => 41,
            ],
            [
                "name" => "Santo Amaro",
                "country" => 41,
            ],
            [
                "name" => "Neves",
                "country" => 41,
            ],
            [
                "name" => "Santana",
                "country" => 41,
            ],
            [
                "name" => "Trindade",
                "country" => 41,
            ],


            [
                "name" => "Asmara",
                "country" => 16,
            ],
            [
                "name" => "Assab",
                "country" => 16,
            ],
            [
                "name" => "Keren",
                "country" => 16,
            ],
            [
                "name" => "Massaoua",
                "country" => 16,
            ],
            [
                "name" => "Mendefera",
                "country" => 16,
            ],
            [
                "name" => "Praia",
                "country" => 9,
            ],
            [
                "name" => "Mindelo",
                "country" => 9,
            ],
            [
                "name" => "Santa Maria",
                "country" => 9,
            ],
            [
                "name" => "Assomada",
                "country" => 9,
            ],
            [
                "name" => "Porto Novo",
                "country" => 9,
            ],
            [
                "name" => "Pedra Badejo",
                "country" => 9,
            ],
            [
                "name" => "São Filipe",
                "country" => 9,
            ],
            [
                "name" => "Tarrafal",
                "country" => 9,
            ],
            [
                "name" => "Alger",
                "country" => 2,
            ],
            [
                "name" => "Oran",
                "country" => 2,
            ],
            [
                "name" => "Constantine",
                "country" => 2,
            ],
            [
                "name" => "Annaba",
                "country" => 2,
            ],
            [
                "name" => "Blida",
                "country" => 2,
            ],
            [
                "name" => "Batna",
                "country" => 2,
            ],
            [
                "name" => "Djelfa",
                "country" => 2,
            ],
            [
                "name" => "Sétif",
                "country" => 2,
            ],
            [
                "name" => "Sidi bel Abbès",
                "country" => 2,
            ],
            [
                "name" => "Biskra",
                "country" => 2,
            ],
            [
                "name" => "Tébessa",
                "country" => 2,
            ],
            [
                "name" => "El Oued",
                "country" => 2,
            ],
            [
                "name" => "Skikda",
                "country" => 2,
            ],
            [
                "name" => "Tiaret",
                "country" => 2,
            ],
            [
                "name" => "Béjaïa",
                "country" => 2,
            ],
            [
                "name" => "Bissau",
                "country" => 22,
            ],
            [
                "name" => "Bafatá",
                "country" => 22,
            ],
            [
                "name" => "Bissorã",
                "country" => 22,
            ],
            [
                "name" => "Bolama",
                "country" => 22,
            ],
            [
                "name" => "Mogadiscio",
                "country" => 45,
            ],
            [
                "name" => "Hargeisa",
                "country" => 45,
            ],
            [
                "name" => "Borama",
                "country" => 45,
            ],
            [
                "name" => "Merka",
                "country" => 45,
            ],
            [
                "name" => "Kismaayo",
                "country" => 45,
            ],
            [
                "name" => "Nouakchott",
                "country" => 33,
            ],
            [
                "name" => "Nouâdhibou",
                "country" => 33,
            ],
            [
                "name" => "Adel Bagrou",
                "country" => 33,
            ],
            [
                "name" => "Boghé",
                "country" => 33,
            ],
            [
                "name" => "Kiffa",
                "country" => 33,
            ],
            [
                "name" => "Zouerate",
                "country" => 33,
            ],
            [
                "name" => "Kaédi",
                "country" => 33,
            ],
            [
                "name" => "Freetown",
                "country" => 44,
            ],
            [
                "name" => "Bo",
                "country" => 44,
            ],
            [
                "name" => "Kenema",
                "country" => 44,
            ],
            [
                "name" => "Makeni",
                "country" => 44,
            ],
            [
                "name" => "Malabo",
                "country" => 23,
            ],
            [
                "name" => "Bata",
                "country" => 23,
            ],
            [
                "name" => "Ebebiyín",
                "country" => 23,
            ],
            [
                "name" => "Tunis",
                "country" => 52,
            ],
            [
                "name" => "Sfax",
                "country" => 52,
            ],
            [
                "name" => "Sousse",
                "country" => 52,
            ],
            [
                "name" => "Kairouan",
                "country" => 52,
            ],
            [
                "name" => "Bizerte",
                "country" => 52,
            ],
            [
                "name" => "Gabès",
                "country" => 52,
            ],
            [
                "name" => "La Soukra",
                "country" => 52,
            ],
            [
                "name" => "Ariana",
                "country" => 52,
            ],
            [
                "name" => "Luanda",
                "country" => 3,
            ],
            [
                "name" => "Huambo",
                "country" => 3,
            ],
            [
                "name" => "Lobito",
                "country" => 3,
            ],
            [
                "name" => "Benguela",
                "country" => 3,
            ],
            [
                "name" => "Lucapa",
                "country" => 3,
            ],
            [
                "name" => "Kuito",
                "country" => 3,
            ],
            [
                "name" => "Lubango",
                "country" => 3,
            ],
            [
                "name" => "Malanje",
                "country" => 3,
            ],
            [
                "name" => "Mwanza",
                "country" => 49,
            ],
            [
                "name" => "Zanzibar City",
                "country" => 49,
            ],
            [
                "name" => "Arusha",
                "country" => 49,
            ],
            [
                "name" => "Mbeya",
                "country" => 49,
            ],
            [
                "name" => "Morogoro",
                "country" => 49,
            ],
            [
                "name" => "Tanga",
                "country" => 49,
            ],
            [
                "name" => "Dodoma",
                "country" => 49,
            ],
            [
                "name" => "Kigoma",
                "country" => 49,
            ],
            [
                "name" => "Moshi",
                "country" => 49,
            ],
            [
                "name" => "Le Caire",
                "country" => 15,
            ],
            [
                "name" => "Alexandrie",
                "country" => 15,
            ],
            [
                "name" => "Gizeh",
                "country" => 15,
            ],
            [
                "name" => "Shubra El-Kheima",
                "country" => 15,
            ],
            [
                "name" => "Port-Saïd",
                "country" => 15,
            ],
            [
                "name" => "Suez",
                "country" => 15,
            ],
            [
                "name" => "Louxor",
                "country" => 15,
            ],
            [
                "name" => "Mansourah",
                "country" => 15,
            ],
            [
                "name" => "El-Mahalla El-Kubra",
                "country" => 15,
            ],
            [
                "name" => "Tanta",
                "country" => 15,
            ],
            [
                "name" => "Assiout",
                "country" => 15,
            ],
            [
                "name" => "Ismaïlia",
                "country" => 15,
            ],
            [
                "name" => "Fayoum",
                "country" => 15,
            ],
            [
                "name" => "Zagazig",
                "country" => 15,
            ],
            [
                "name" => "Assouan",
                "country" => 15,
            ],
            [
                "name" => "Damiette",
                "country" => 15,
            ],
            [
                "name" => "Damanhur",
                "country" => 15,
            ],
            [
                "name" => "Al Minya",
                "country" => 15,
            ],
            [
                "name" => "Beni Suef",
                "country" => 15,
            ],
            [
                "name" => "Qena",
                "country" => 15,
            ],
            [
                "name" => "Conakry",
                "country" => 21,
            ],
            [
                "name" => "Nzérékoré",
                "country" => 21,
            ],
            [
                "name" => "Kankan",
                "country" => 21,
            ],
            [
                "name" => "Kindia",
                "country" => 21,
            ],
            [
                "name" => "Boké",
                "country" => 21,
            ],
            [
                "name" => "Kissidougou",
                "country" => 21,
            ],
            [
                "name" => "Kamsar",
                "country" => 21,
            ],
            [
                "name" => "Tripoli",
                "country" => 27,
            ],
            [
                "name" => "Benghazi",
                "country" => 27,
            ],
            [
                "name" => "Misrata",
                "country" => 27,
            ],
            [
                "name" => "El Beïda",
                "country" => 27,
            ],
            [
                "name" => "Tarhounah",
                "country" => 27,
            ],
            [
                "name" => "Khoms",
                "country" => 27,
            ],
            [
                "name" => "Zaouïa",
                "country" => 27,
            ],
            [
                "name" => "Zouara",
                "country" => 27,
            ],
            [
                "name" => "Ajdabiya",
                "country" => 27,
            ],
            [
                "name" => "Syrte",
                "country" => 27,
            ],
            [
                "name" => "Sebha",
                "country" => 27,
            ],
            [
                "name" => "Tobrouk",
                "country" => 27,
            ],
            [
                "name" => "El Azizia",
                "country" => 27,
            ],
            [
                "name" => "Sabratha",
                "country" => 27,
            ],
            [
                "name" => "Zliten",
                "country" => 27,
            ],
            [
                "name" => "Lilongwe",
                "country" => 29,
            ],
            [
                "name" => "Blantyre",
                "country" => 29,
            ],
            [
                "name" => "Mzuzu",
                "country" => 29,
            ],
            [
                "name" => "Zomba",
                "country" => 29,
            ],
            [
                "name" => "Kasungu",
                "country" => 29,
            ],
            [
                "name" => "Mangochi",
                "country" => 29,
            ],
            [
                "name" => "Maputo",
                "country" => 34,
            ],
            [
                "name" => "Matola",
                "country" => 34,
            ],
            [
                "name" => "Beira",
                "country" => 34,
            ],
            [
                "name" => "Nampula",
                "country" => 34,
            ],
            [
                "name" => "Chimoio",
                "country" => 34,
            ],
            [
                "name" => "Nacala",
                "country" => 34,
            ],
            [
                "name" => "Quelimane",
                "country" => 34,
            ],
            [
                "name" => "Mocuba",
                "country" => 34,
            ],
            [
                "name" => "Tete",
                "country" => 34,
            ],
            [
                "name" => "Xai-Xai",
                "country" => 34,
            ],






            [
                "name" => "Windhoek",
                "country" => 35,
            ],
            [
                "name" => "Walvis Bay",
                "country" => 35,
            ],
            [
                "name" => "Swakopmund",
                "country" => 35,
            ],
            [
                "name" => "Rundu",
                "country" => 35,
            ],




            [
                "name" => "Kampala",
                "country" => 38,
            ],
            [
                "name" => "Gulu",
                "country" => 38,
            ],
            [
                "name" => "Lira",
                "country" => 38,
            ],
            [
                "name" => "Jinja",
                "country" => 38,
            ],
            [
                "name" => "Mukono",
                "country" => 38,
            ],
            [
                "name" => "Mbarara",
                "country" => 38,
            ],
            [
                "name" => "Kasese",
                "country" => 38,
            ],
            [
                "name" => "Mbale",
                "country" => 38,
            ],
            [
                "name" => "Kitgum",
                "country" => 38,
            ],
            [
                "name" => "Njeru",
                "country" => 38,
            ],
            [
                "name" => "Khartoum",
                "country" => 46,
            ],
            [
                "name" => "Omdourman",
                "country" => 46,
            ],
            [
                "name" => "Bahri",
                "country" => 46,
            ],
            [
                "name" => "Nyala",
                "country" => 46,
            ],
            [
                "name" => "Port-Soudan",
                "country" => 46,
            ],
            [
                "name" => "Kassala",
                "country" => 46,
            ],
            [
                "name" => "al-Ubayyid",
                "country" => 46,
            ],
            [
                "name" => "Kosti",
                "country" => 46,
            ],
            [
                "name" => "Wad Madani",
                "country" => 46,
            ],
            [
                "name" => "al-Qadarif",
                "country" => 46,
            ],






            [
                "name" => "Djouba",
                "country" => 47,
            ],
            [
                "name" => "Rumbek",
                "country" => 47,
            ],
            [
                "name" => "Malakal",
                "country" => 47,
            ],
            [
                "name" => "Wau",
                "country" => 47,
            ],
            [
                "name" => "Yei",
                "country" => 47,
            ],
            [
                "name" => "Yambio",
                "country" => 47,
            ],
            [
                "name" => "Lusaka",
                "country" => 53,
            ],
            [
                "name" => "Ndola",
                "country" => 53,
            ],
            [
                "name" => "Kitwe",
                "country" => 53,
            ],
            [
                "name" => "Kabwe",
                "country" => 53,
            ],
            [
                "name" => "Chingola",
                "country" => 53,
            ],
            [
                "name" => "Mufulira",
                "country" => 53,
            ],
            [
                "name" => "Livingstone",
                "country" => 53,
            ],
            [
                "name" => "Luanshya",
                "country" => 53,
            ],
            [
                "name" => "Harare",
                "country" => 54,
            ],
            [
                "name" => "Bulawayo",
                "country" => 54,
            ],
            [
                "name" => "Chitungwiza",
                "country" => 54,
            ],
            [
                "name" => "Mutare",
                "country" => 54,
            ],
            [
                "name" => "Gweru",
                "country" => 54,
            ],
            [
                "name" => "Epworth",
                "country" => 54,
            ],
            [
                "name" => "Kwekwe",
                "country" => 54,
            ],
            [
                "name" => "Redcliffe",
                "country" => 54,
            ],
            [
                "name" => "Lomé",
                "country" => 51,
            ],
            [
                "name" => "Sokodé",
                "country" => 51,
            ],
            [
                "name" => "Kara",
                "country" => 51,
            ],
            [
                "name" => "Kpalimé",
                "country" => 51,
            ],
            [
                "name" => "Atakpamé",
                "country" => 51,
            ],
            [
                "name" => "Bassar",
                "country" => 51,
            ],
            [
                "name" => "Tsévié",
                "country" => 51,
            ],
            [
                "name" => "Aného",
                "country" => 51,
            ],
            [
                "name" => "Mango",
                "country" => 51,
            ],
            [
                "name" => "Dapaong",
                "country" => 51,
            ],
            [
                "name" => "Dori",
                "country" => 6,
            ],
            [
                "name" => "Macenta",
                "country" => 21,
            ],
            [
                "name" => "Mamou",
                "country" => 21,
            ],
            [
                "name" => "Guéckédou",
                "country" => 21,
            ],
            [
                "name" => "Gabu",
                "country" => 22,
            ],
            [
                "name" => "Mafefeng",
                "country" => 25,
            ],
            [
                "name" => "Teyateyaneng",
                "country" => 25,
            ],
            [
                "name" => "Otjiwarongo",
                "country" => 35,
            ],
            [
                "name" => "Oshakati",
                "country" => 35,
            ],
            [
                "name" => "Katima Mulilo",
                "country" => 35,
            ],
            [
                "name" => "Grootfontein",
                "country" => 35,
            ],
            [
                "name" => "Rehoboth",
                "country" => 35,
            ],
            [
                "name" => "Okahandja",
                "country" => 35,
            ],
            [
                "name" => "Dosso",
                "country" => 36,
            ],
            [
                "name" => "Arlit",
                "country" => 36,
            ],
            [
                "name" => "Koidu",
                "country" => 44,
            ],
            [
                "name" => "Dar es Salaam",
                "country" => 49,
            ]
        ];

        foreach ($cities as $city) {
            \App\Models\City::factory()->create($city);
        };

        ##======== CREATION DES AREAS ============####
        $areas = [
            [
                "name" => "Akoïtchaou",
            ],
            [
                "name" => "Alfakoara",
            ],
            [
                "name" => "Angaradébou",
            ],
            [
                "name" => "Dogban",
            ],
            [
                "name" => "Fafa",
            ],
            [
                "name" => "Fouet",
            ],
            [
                "name" => "Kpalolo",
            ],
            [
                "name" => "Sékalé",
            ],
            [
                "name" => "Sondo",
            ],
            [
                "name" => "Soundou",
            ],
            [
                "name" => "Tchoka",
            ],
            [
                "name" => "Thuy",
            ],
            [
                "name" => "Thya",
            ],
            [
                "name" => "Bensékou",
            ],
            [
                "name" => "Gogbêdé",
            ],
            [
                "name" => "Koutakroukou",
            ],
            [
                "name" => "Dinin",
            ],
            [
                "name" => "Dinin Peulh",
            ],
            [
                "name" => "Donwari",
            ],
            [
                "name" => "Donwari-Peulh",
            ],
            [
                "name" => "Gambanè",
            ],
            [
                "name" => "Gambanè-Peulh",
            ],
            [
                "name" => "Kpéssarou",
            ],
            [
                "name" => "Mongo",
            ],
            [
                "name" => "Mongo-Peulh",
            ],
            [
                "name" => "Sidérou",
            ],
            [
                "name" => "Tissarou",
            ],
            [
                "name" => "Tissarou-Peulh",
            ],
            [
                "name" => "Touko",
            ],
            [
                "name" => "Damadi",
            ],
            [
                "name" => "Dodopanin",
            ],
            [
                "name" => "Gando-Kossikana",
            ],
            [
                "name" => "Gansosso-Gbiga",
            ],
            [
                "name" => "Gansosso-Yiroussé",
            ],
            [
                "name" => "Kadjèrè",
            ],
            [
                "name" => "Kéféri-Hinkanté",
            ],
            [
                "name" => "Kéféri-Sinté",
            ],
            [
                "name" => "Pédé",
            ],
            [
                "name" => "Al Barika",
            ],
            [
                "name" => "Alékparé",
            ],
            [
                "name" => "Banigourou",
            ],
            [
                "name" => "Baobab",
            ],
            [
                "name" => "Kossarou",
            ],
            [
                "name" => "Madina",
            ],
            [
                "name" => "Zerman-Kouré",
            ],
            [
                "name" => "Bakpara",
            ],
            [
                "name" => "Héboumey",
            ],
            [
                "name" => "Kandi-Fô",
            ],
            [
                "name" => "Kandi-Fô-Peulh",
            ],
            [
                "name" => "Lafiarou",
            ],
            [
                "name" => "Podo",
            ],
            [
                "name" => "Sinikoussou-Béri",
            ],
            [
                "name" => "Firi",
            ],
            [
                "name" => "Gbokoukou",
            ],
            [
                "name" => "Gogoré",
            ],
            [
                "name" => "Kassakou",
            ],
            [
                "name" => "Padé",
            ],
            [
                "name" => "Padé-Peulh",
            ],
            [
                "name" => "Pégon",
            ],
            [
                "name" => "Banikani",
            ],
            [
                "name" => "Fouré",
            ],
            [
                "name" => "Lolo",
            ],
            [
                "name" => "Saah",
            ],
            [
                "name" => "Bikongou",
            ],
            [
                "name" => "Bodérou",
            ],
            [
                "name" => "Bodérou-Peulh",
            ],
            [
                "name" => "Gbindarou",
            ],
            [
                "name" => "Sakatoussa",
            ],
            [
                "name" => "Sam",
            ],
            [
                "name" => "Sam-Gokirou",
            ],
            [
                "name" => "Sam-Peulh",
            ],
            [
                "name" => "Tankongou",
            ],
            [
                "name" => "Téri",
            ],
            [
                "name" => "Wonga",
            ],
            [
                "name" => "Alibori-Yankin",
            ],
            [
                "name" => "Pédigui",
            ],
            [
                "name" => "Sinawongourou",
            ],
            [
                "name" => "Sinawongourou-Peulh",
            ],
            [
                "name" => "Sonsoro",
            ],
            [
                "name" => "Sonsoro-Peulh",
            ],
            [
                "name" => "Djindégabi-Tounga",
            ],
            [
                "name" => "Gaabo",
            ],
            [
                "name" => "Garou-Béri",
            ],
            [
                "name" => "Garou-Tédji-Gorobani",
            ],
            [
                "name" => "Garou-Tédji",
            ],
            [
                "name" => "Garou- Wénou-Kannin",
            ],
            [
                "name" => "Kambouwo-Tounga",
            ],
            [
                "name" => "Monkassa",
            ],
            [
                "name" => "Tounga-Tédji",
            ],
            [
                "name" => "Wanda",
            ],
            [
                "name" => "Bangou",
            ],
            [
                "name" => "Banitè-Koubéri",
            ],
            [
                "name" => "Banitè-Fèrè Kirè ",
            ],
            [
                "name" => "Boïffo",
            ],
            [
                "name" => "Fiafounfoun",
            ],
            [
                "name" => "Goun-Goun",
            ],
            [
                "name" => "Guéné-Guidigo",
            ],
            [
                "name" => "Guéné-Zermé",
            ],
            [
                "name" => "Isséné",
            ],
            [
                "name" => "Kantoro",
            ],
            [
                "name" => "Koara-Tédji",
            ],
            [
                "name" => "Lakali-Kaney",
            ],
            [
                "name" => "Mokollé",
            ],
            [
                "name" => "Sounbey-Gorou",
            ],
            [
                "name" => "Tondi-Banda",
            ],
            [
                "name" => "Toro-Zougou",
            ],
            [
                "name" => "Godjékoara",
            ],
            [
                "name" => "Goroussoundougou",
            ],
            [
                "name" => "Illoua",
            ],
            [
                "name" => "Kassa",
            ],
            [
                "name" => "Koualérou",
            ],
            [
                "name" => "Kouara-tédji",
            ],
            [
                "name" => "Madécali",
            ],
            [
                "name" => "Madécali-Zongo",
            ],
            [
                "name" => "Mélayakouara",
            ],
            [
                "name" => "Sendé",
            ],
            [
                "name" => "Bodjécali",
            ],
            [
                "name" => "Bodjécali-Château",
            ],
            [
                "name" => "Galiel",
            ],
            [
                "name" => "Golobanda",
            ],
            [
                "name" => "Kotchi",
            ],
            [
                "name" => "Tassi-Djindé",
            ],
            [
                "name" => "Tassi-tédji",
            ],
            [
                "name" => "Tassi-Tédji-Banizounbou",
            ],
            [
                "name" => "Tassi-Zénon",
            ],
            [
                "name" => "Wollo",
            ],
            [
                "name" => "Wollo-Château",
            ],
            [
                "name" => "Wouro-Yesso",
            ],
            [
                "name" => "Baniloua",
            ],
            [
                "name" => "Dèguè-Dègué",
            ],
            [
                "name" => "Gorou-Djindé",
            ],
            [
                "name" => "Molla",
            ],
            [
                "name" => "Sakawan-Tédji",
            ],
            [
                "name" => "Sakawan-Zénon",
            ],
            [
                "name" => "Santché",
            ],
            [
                "name" => "Toumboutou",
            ],
            [
                "name" => "Wanzam-Koara",
            ],
            [
                "name" => "Birni Lafia",
            ],
            [
                "name" => "Fadama",
            ],
            [
                "name" => "Goroukambou",
            ],
            [
                "name" => "Kangara-Peulh",
            ],
            [
                "name" => "Karigui",
            ],
            [
                "name" => "Missira",
            ],
            [
                "name" => "Saboula",
            ],
            [
                "name" => "Tondikoaria",
            ],
            [
                "name" => "Tondoobon",
            ],
            [
                "name" => "Banikani",
            ],
            [
                "name" => "Bogo-Bogo",
            ],
            [
                "name" => "Koaratédji",
            ],
            [
                "name" => "Kofounou",
            ],
            [
                "name" => "Mamassy-Gourma",
            ],
            [
                "name" => "Torioh",
            ],
            [
                "name" => "Toura",
            ],
            [
                "name" => "Bello-Tounga",
            ],
            [
                "name" => "Fakara",
            ],
            [
                "name" => "Gourou Béri",
            ],
            [
                "name" => "Karimama-Batouma-Béri",
            ],
            [
                "name" => "Karimama-Dendi-Kouré",
            ],
            [
                "name" => "Mamassy-Peulh",
            ],
            [
                "name" => "Banizoumbou",
            ],
            [
                "name" => "Dangazori",
            ],
            [
                "name" => "Garbey-Koara",
            ],
            [
                "name" => "Goungou-Béri",
            ],
            [
                "name" => "Kéné-Tounga",
            ],
            [
                "name" => "Kompa",
            ],
            [
                "name" => "Kompanti",
            ],
            [
                "name" => "Bako-Maka",
            ],
            [
                "name" => "Bongnami",
            ],
            [
                "name" => "Fandou",
            ],
            [
                "name" => "Goumbitchigoura",
            ],
            [
                "name" => "Loumbou-Loumbou",
            ],
            [
                "name" => "Machayan-Marché",
            ],
            [
                "name" => "Monsey",
            ],
            [
                "name" => "Pétchinga",
            ],
            [
                "name" => "Arbonga",
            ],
            [
                "name" => "Aviation",
            ],
            [
                "name" => "Batran",
            ],
            [
                "name" => "Demanou",
            ],
            [
                "name" => "Dérou Garou",
            ],
            [
                "name" => "Glégbabi",
            ],
            [
                "name" => "Guiguiri",
            ],
            [
                "name" => "Kingarou",
            ],
            [
                "name" => "Kokiré",
            ],
            [
                "name" => "Kommon",
            ],
            [
                "name" => "Kori Guiguiri",
            ],
            [
                "name" => "Kpagaguèdou",
            ],
            [
                "name" => "Orou Gnonrou",
            ],
            [
                "name" => "Samanga",
            ],
            [
                "name" => "Tokey-Banta",
            ],
            [
                "name" => "Wagou",
            ],
            [
                "name" => "Wétérou",
            ],
            [
                "name" => "Yadikparou",
            ],
            [
                "name" => "Bofounou",
            ],
            [
                "name" => "Founougo-Boutèra",
            ],
            [
                "name" => "Founougo-Gorobani",
            ],
            [
                "name" => "Founougo-Gah",
            ],
            [
                "name" => "Gama",
            ],
            [
                "name" => "Gaméré-Zongo",
            ],
            [
                "name" => "Gougnirou",
            ],
            [
                "name" => "Gougnirou-Gah",
            ],
            [
                "name" => "Iboto",
            ],
            [
                "name" => "Igrigou",
            ],
            [
                "name" => "Kandérou",
            ],
            [
                "name" => "Kandérou-Kotchera",
            ],
            [
                "name" => "Koney",
            ],
            [
                "name" => "Kpako-Gbabi",
            ],
            [
                "name" => "Pogoussorou",
            ],
            [
                "name" => "Sampèto",
            ],
            [
                "name" => "Sissianganrou",
            ],
            [
                "name" => "Yanguéri",
            ],
            [
                "name" => "Yinyinpogou",
            ],
            [
                "name" => "Bonhanrou",
            ],
            [
                "name" => "Gnambanou",
            ],
            [
                "name" => "Gomparou-Gokpadou",
            ],
            [
                "name" => "Gomparou-Goussinrou",
            ],
            [
                "name" => "Gomparou",
            ],
            [
                "name" => "Gourè-Edé",
            ],
            [
                "name" => "Kali",
            ],
            [
                "name" => "Kpessanrou",
            ],
            [
                "name" => "Niékoubanta",
            ],
            [
                "name" => "Pampime",
            ],
            [
                "name" => "Sionkpékoka",
            ],
            [
                "name" => "Tiganson",
            ],
            [
                "name" => "Yossinandé",
            ],
            [
                "name" => "Bonni",
            ],
            [
                "name" => "Bontè",
            ],
            [
                "name" => "Dombouré",
            ],
            [
                "name" => "Dombouré-Gah",
            ],
            [
                "name" => "Dondagou",
            ],
            [
                "name" => "Gbassa",
            ],
            [
                "name" => "Ggangbanga",
            ],
            [
                "name" => "Goumori-Gbissarou",
            ],
            [
                "name" => "Goumori-Bayèdou",
            ],
            [
                "name" => "Goumori-Gah",
            ],
            [
                "name" => "Mondoukoka",
            ],
            [
                "name" => "Mondoukoka-Gah",
            ],
            [
                "name" => "Sakassinnou",
            ],
            [
                "name" => "Satouba",
            ],
            [
                "name" => "Tihourè",
            ],
            [
                "name" => "Gamarou",
            ],
            [
                "name" => "Kokey-Sinakparou",
            ],
            [
                "name" => "Kokey-Filo",
            ],
            [
                "name" => "Nimbéré",
            ],
            [
                "name" => "Piguiré",
            ],
            [
                "name" => "Sonwari",
            ],
            [
                "name" => "Yambérou",
            ],
            [
                "name" => "Bonkéré",
            ],
            [
                "name" => "Kokiborou",
            ],
            [
                "name" => "Sounsoun",
            ],
            [
                "name" => "Guinningou-Gah",
            ],
            [
                "name" => "Sirikou",
            ],
            [
                "name" => "Boniki",
            ],
            [
                "name" => "Kihouhou",
            ],
            [
                "name" => "Kpéborogou",
            ],
            [
                "name" => "Ounet-Sinakparou",
            ],
            [
                "name" => "Ounet-Sékogbaourou",
            ],
            [
                "name" => "Ounet-Gah",
            ],
            [
                "name" => "Sonnou",
            ],
            [
                "name" => "Sonnou-Gah",
            ],
            [
                "name" => "Bonyangou",
            ],
            [
                "name" => "Bourin",
            ],
            [
                "name" => "Gnandarou",
            ],
            [
                "name" => "Kégamorou",
            ],
            [
                "name" => "Poto",
            ],
            [
                "name" => "Poto-Gah",
            ],
            [
                "name" => "Simpérou",
            ],
            [
                "name" => "Simpérou-Gah",
            ],
            [
                "name" => "Sompéroukou-Gbessara",
            ],
            [
                "name" => "Sompéroukou-Yorounon",
            ],
            [
                "name" => "Sompéroukou-Gah",
            ],
            [
                "name" => "Gbéniki",
            ],
            [
                "name" => "Mékrou",
            ],
            [
                "name" => "Soroko Yorounon",
            ],
            [
                "name" => "Soroko",
            ],
            [
                "name" => "Soroko Gah",
            ],
            [
                "name" => "Soudou",
            ],
            [
                "name" => "Atabénou",
            ],
            [
                "name" => "Gnambourankorou",
            ],
            [
                "name" => "Guimbagou",
            ],
            [
                "name" => "Kakourogou",
            ],
            [
                "name" => "Siwougourou",
            ],
            [
                "name" => "Tintinmou",
            ],
            [
                "name" => "Tintinmou-Gah",
            ],
            [
                "name" => "Toura-Bio N’Worou",
            ],
            [
                "name" => "Toura-Yokparou",
            ],
            [
                "name" => "Toura Gah",
            ],
            [
                "name" => "Badou",
            ],
            [
                "name" => "Kérou-Bagou",
            ],
            [
                "name" => "Bagou-Sinkparou",
            ],
            [
                "name" => "Bagou-Yagbo",
            ],
            [
                "name" => "Banigouré",
            ],
            [
                "name" => "Bépororo",
            ],
            [
                "name" => "Bouyagourou",
            ],
            [
                "name" => "Diadia",
            ],
            [
                "name" => "Gandobou",
            ],
            [
                "name" => "Garagoro",
            ],
            [
                "name" => "Kali",
            ],
            [
                "name" => "Kangnan",
            ],
            [
                "name" => "Kassirou",
            ],
            [
                "name" => "Kpakaguèrè",
            ],
            [
                "name" => "Nafarou",
            ],
            [
                "name" => "Orou-Bédou",
            ],
            [
                "name" => "Taïti",
            ],
            [
                "name" => "Yankpannou",
            ],
            [
                "name" => "Djinmélé",
            ],
            [
                "name" => "Gogounou-Gbanin",
            ],
            [
                "name" => "Gogounou-Nassabara",
            ],
            [
                "name" => "Goubéra",
            ],
            [
                "name" => "Konsénin",
            ],
            [
                "name" => "Ouèrè-Bani",
            ],
            [
                "name" => "Ouèrè-Sonkérou",
            ],
            [
                "name" => "Sonkorou",
            ],
            [
                "name" => "Sorou",
            ],
            [
                "name" => "Bantansoué",
            ],
            [
                "name" => "Boro",
            ],
            [
                "name" => "Borodarou",
            ],
            [
                "name" => "Dagourou",
            ],
            [
                "name" => "Diguisson",
            ],
            [
                "name" => "Gounarou",
            ],
            [
                "name" => "Lafiarou",
            ],
            [
                "name" => "Pariki",
            ],
            [
                "name" => "Dimdimnou",
            ],
            [
                "name" => "Donwari",
            ],
            [
                "name" => "Gamagou",
            ],
            [
                "name" => "Gasso",
            ],
            [
                "name" => "Gbemoussou",
            ],
            [
                "name" => "Gnindarou",
            ],
            [
                "name" => "Gouré Dantcha",
            ],
            [
                "name" => "Kantakpara-Wokparou",
            ],
            [
                "name" => "Kpigourou",
            ],
            [
                "name" => "Ouessènè-Worou",
            ],
            [
                "name" => "Petit-Paris",
            ],
            [
                "name" => "Sori-Boro Wanrou",
            ],
            [
                "name" => "Sori-Kpankpanou",
            ],
            [
                "name" => "Sori-Peulh",
            ],
            [
                "name" => "Tawali",
            ],
            [
                "name" => "Tchoupounga",
            ],
            [
                "name" => "Binga",
            ],
            [
                "name" => "Gando-Dari",
            ],
            [
                "name" => "Dougoulaye",
            ],
            [
                "name" => "Fanan",
            ],
            [
                "name" => "Gbessa",
            ],
            [
                "name" => "Sougou-Gourou",
            ],
            [
                "name" => "Sougou-Kpantrossi",
            ],
            [
                "name" => "Dassari",
            ],
            [
                "name" => "Dougou",
            ],
            [
                "name" => "Kalé",
            ],
            [
                "name" => "Soukarou",
            ],
            [
                "name" => "Wara",
            ],
            [
                "name" => "Wara-Gbidogo",
            ],
            [
                "name" => "Wara-Gah",
            ],
            [
                "name" => "Bobéna",
            ],
            [
                "name" => "Diapéou",
            ],
            [
                "name" => "Goungbè",
            ],
            [
                "name" => "Kouté",
            ],
            [
                "name" => "Libantè",
            ],
            [
                "name" => "Saonzi",
            ],
            [
                "name" => "Gbéssaka",
            ],
            [
                "name" => "Kambara",
            ],
            [
                "name" => "Lété",
            ],
            [
                "name" => "Liboussou",
            ],
            [
                "name" => "Tounga-Issa",
            ],
            [
                "name" => "Waranzi",
            ],
            [
                "name" => "Boumoussou",
            ],
            [
                "name" => "Gandoloukassa",
            ],
            [
                "name" => "Gbassè",
            ],
            [
                "name" => "Gbèkakarou",
            ],
            [
                "name" => "Guénélaga",
            ],
            [
                "name" => "Kamanan",
            ],
            [
                "name" => "Lougou",
            ],
            [
                "name" => "Niambara",
            ],
            [
                "name" => "Sinwan",
            ],
            [
                "name" => "Zonzi",
            ],
            [
                "name" => "Batazi",
            ],
            [
                "name" => "Fondo",
            ],
            [
                "name" => "Gbessarè",
            ],
            [
                "name" => "Guéné Kouzi",
            ],
            [
                "name" => "Korowi",
            ],
            [
                "name" => "Kpassana",
            ],
            [
                "name" => "Limafrani",
            ],
            [
                "name" => "Mafouta-Waassarè",
            ],
            [
                "name" => "Piami",
            ],
            [
                "name" => "Samtimbara",
            ],
            [
                "name" => "Bèdafou",
            ],
            [
                "name" => "Gbarana",
            ],
            [
                "name" => "Morou",
            ],
            [
                "name" => "Poéla",
            ],
            [
                "name" => "Sèrèbani",
            ],
            [
                "name" => "Sèrèkibè",
            ],
            [
                "name" => "Sokotindji",
            ],
            [
                "name" => "Tchakama",
            ],
            [
                "name" => "Ikounga",
            ],
            [
                "name" => "Kototougou",
            ],
            [
                "name" => "Koudahongou",
            ],
            [
                "name" => "Koukouangou-Boukoumbé",
            ],
            [
                "name" => "Koukouatchiengou",
            ],
            [
                "name" => "Koumaagou",
            ],
            [
                "name" => "Koumontchirgou",
            ],
            [
                "name" => "Koumatié",
            ],
            [
                "name" => "Kounadogou",
            ],
            [
                "name" => "Kountchougou",
            ],
            [
                "name" => "Koupagou",
            ],
            [
                "name" => "Koussayagou",
            ],
            [
                "name" => "Koussocoingou",
            ],
            [
                "name" => "Koutagou",
            ],
            [
                "name" => "Koutchata",
            ],
            [
                "name" => "Koutchatahongou",
            ],
            [
                "name" => "Tatouta",
            ],
            [
                "name" => "Zongo",
            ],
            [
                "name" => "Ditchendia",
            ],
            [
                "name" => "Koutatiégou",
            ],
            [
                "name" => "Dikoumini",
            ],
            [
                "name" => "Dimansouri",
            ],
            [
                "name" => "Dipoli",
            ],
            [
                "name" => "Dissapoli",
            ],
            [
                "name" => "Kpérinkpé",
            ],
            [
                "name" => "Mantchari",
            ],
            [
                "name" => "Natchénté",
            ],
            [
                "name" => "Otanongou",
            ],
            [
                "name" => "Oukounsérihoun",
            ],
            [
                "name" => "Agbontê",
            ],
            [
                "name" => "Kêyordakê",
            ],
            [
                "name" => "Koucongou",
            ],
            [
                "name" => "Koupagou-Korontière",
            ],
            [
                "name" => "Koutchatié",
            ],
            [
                "name" => "Kouya",
            ],
            [
                "name" => "Natiéni",
            ],
            [
                "name" => "Okouaro",
            ],
            [
                "name" => "Tadowonta",
            ],
            [
                "name" => "Tassayota",
            ],
            [
                "name" => "Didompê",
            ],
            [
                "name" => "Kougnangou",
            ],
            [
                "name" => "Koukouankpangou",
            ],
            [
                "name" => "Koussoucoingou",
            ],
            [
                "name" => "Koussounoungou",
            ],
            [
                "name" => "Koutayagou",
            ],
            [
                "name" => "Kouwetakouangou",
            ],
            [
                "name" => "Takpanta",
            ],
            [
                "name" => "Tchapéta",
            ],
            [
                "name" => "Tipaoti",
            ],
            [
                "name" => "Dikon Hein",
            ],
            [
                "name" => "Dikouténi",
            ],
            [
                "name" => "Dimatadoni",
            ],
            [
                "name" => "Dimatima",
            ],
            [
                "name" => "Dipokor",
            ],
            [
                "name" => "Dipokor-Tchaaba",
            ],
            [
                "name" => "Kouhingou",
            ],
            [
                "name" => "Koukouakoumagou",
            ],
            [
                "name" => "Koukouangou",
            ],
            [
                "name" => "Koumadogou",
            ],
            [
                "name" => "Kounatchatiégou",
            ],
            [
                "name" => "Koutangou-Manta",
            ],
            [
                "name" => "Koutchantié",
            ],
            [
                "name" => "Takotiéta",
            ],
            [
                "name" => "Tatchadiéta",
            ],
            [
                "name" => "DipokorFontri",
            ],
            [
                "name" => "Koudogou",
            ],
            [
                "name" => "Koukoua",
            ],
            [
                "name" => "Koukpintiegou",
            ],
            [
                "name" => "Koutcha-Koumagou",
            ],
            [
                "name" => "Kounagnigou",
            ],
            [
                "name" => "Kounakogou",
            ],
            [
                "name" => "Kouporgou",
            ],
            [
                "name" => "Koussakou",
            ],
            [
                "name" => "Koutangou",
            ],
            [
                "name" => "Koutoutougou",
            ],
            [
                "name" => "Kouwonatougou",
            ],
            [
                "name" => "Kouwotchirgou",
            ],
            [
                "name" => "Dikouani",
            ],
            [
                "name" => "Dimatékor",
            ],
            [
                "name" => "Dipintakouani",
            ],
            [
                "name" => "Katchagniga",
            ],
            [
                "name" => "Koubêgou",
            ],
            [
                "name" => "Koubentiégou",
            ],
            [
                "name" => "Koucogou",
            ],
            [
                "name" => "Koudadagou",
            ],
            [
                "name" => "Koukouatougou",
            ],
            [
                "name" => "Koukpêtihagou",
            ],
            [
                "name" => "Tabota",
            ],
            [
                "name" => "Takotchienta",
            ],
            [
                "name" => "Tatouta",
            ],
            [
                "name" => "Yatié",
            ],
            [
                "name" => "Bagapodi",
            ],
            [
                "name" => "Cobly",
            ],
            [
                "name" => "Kanadékè",
            ],
            [
                "name" => "Koukontouga",
            ],
            [
                "name" => "Kpétiénou",
            ],
            [
                "name" => "Nouangou",
            ],
            [
                "name" => "Oukodoo",
            ],
            [
                "name" => "Ouorou",
            ],
            [
                "name" => "Ouyérihoun",
            ],
            [
                "name" => "Tchokita",
            ],
            [
                "name" => "Touga",
            ],
            [
                "name" => "Yimpissiri",
            ],
            [
                "name" => "Gnangou",
            ],
            [
                "name" => "Kolgou",
            ],
            [
                "name" => "Pentinga",
            ],
            [
                "name" => "Siénou",
            ],
            [
                "name" => "Zanniouri",
            ],
            [
                "name" => "Datori",
            ],
            [
                "name" => "Kadiéni",
            ],
            [
                "name" => "Matalè",
            ],
            [
                "name" => "Nagnandé",
            ],
            [
                "name" => "Namatiénou",
            ],
            [
                "name" => "Tchamonga",
            ],
            [
                "name" => "Tokibi",
            ],
            [
                "name" => "Kountori",
            ],
            [
                "name" => "Kpetissohoun",
            ],
            [
                "name" => "Namoutchaga",
            ],
            [
                "name" => "Oroukouaré",
            ],
            [
                "name" => "Oukpètouhoun",
            ],
            [
                "name" => "Oukpintihoun",
            ],
            [
                "name" => "Outanonhoun",
            ],
            [
                "name" => "Serhounguè",
            ],
            [
                "name" => "Sinni",
            ],
            [
                "name" => "Tarpingou",
            ],
            [
                "name" => "Coupiani",
            ],
            [
                "name" => "Dassari",
            ],
            [
                "name" => "Firihoun",
            ],
            [
                "name" => "Koundri",
            ],
            [
                "name" => "Kourou-Koualou",
            ],
            [
                "name" => "Nagassega",
            ],
            [
                "name" => "Niéhoun-Laloga",
            ],
            [
                "name" => "Nouari",
            ],
            [
                "name" => "Ouriyori",
            ],
            [
                "name" => "Porga",
            ],
            [
                "name" => "Pouri",
            ],
            [
                "name" => "Sétchindika",
            ],
            [
                "name" => "Tankouari",
            ],
            [
                "name" => "Tankouayokouhoun",
            ],
            [
                "name" => "Tétonga",
            ],
            [
                "name" => "Tigninga",
            ],
            [
                "name" => "Tihoun",
            ],
            [
                "name" => "Tinwéga",
            ],
            [
                "name" => "Bahoun",
            ],
            [
                "name" => "Doga",
            ],
            [
                "name" => "Gouandé",
            ],
            [
                "name" => "Kandeguehoun",
            ],
            [
                "name" => "Kouantiéni",
            ],
            [
                "name" => "Kouforpissiga",
            ],
            [
                "name" => "Sindori-Toni",
            ],
            [
                "name" => "Tassahoun",
            ],
            [
                "name" => "Tcharikouanga",
            ],
            [
                "name" => "Tchassaga",
            ],
            [
                "name" => "Tiari",
            ],
            [
                "name" => "Toubougnini",
            ],
            [
                "name" => "Bourporga",
            ],
            [
                "name" => "Boutouhounpingou",
            ],
            [
                "name" => "Kankini-Séri",
            ],
            [
                "name" => "Matéri",
            ],
            [
                "name" => "Merhoun",
            ],
            [
                "name" => "Mihihoun",
            ],
            [
                "name" => "Nagassega-Kani",
            ],
            [
                "name" => "Pingou",
            ],
            [
                "name" => "Sèkanou",
            ],
            [
                "name" => "Souomou",
            ],
            [
                "name" => "Tampinti-Yerou",
            ],
            [
                "name" => "Tantouri",
            ],
            [
                "name" => "Tintonsi",
            ],
            [
                "name" => "Toussari",
            ],
            [
                "name" => "Yondisseri",
            ],
            [
                "name" => "Yopiaka",
            ],
            [
                "name" => "Borifiéri",
            ],
            [
                "name" => "Holli",
            ],
            [
                "name" => "Kotari",
            ],
            [
                "name" => "Kouarhoun",
            ],
            [
                "name" => "Kpéréhoun",
            ],
            [
                "name" => "Mahontika",
            ],
            [
                "name" => "N’ Tchiéga",
            ],
            [
                "name" => "Nodi",
            ],
            [
                "name" => "Tampouré-Pogué",
            ],
            [
                "name" => "Yédékahoun",
            ],
            [
                "name" => "Bampora",
            ],
            [
                "name" => "Bogodori",
            ],
            [
                "name" => "Dabogohoun",
            ],
            [
                "name" => "Kandjo",
            ],
            [
                "name" => "Konéandri",
            ],
            [
                "name" => "Kousséga",
            ],
            [
                "name" => "Madoga",
            ],
            [
                "name" => "Nambouli",
            ],
            [
                "name" => "Pourniari",
            ],
            [
                "name" => "Tambogou-Kondri",
            ],
            [
                "name" => "Tampanga",
            ],
            [
                "name" => "Tanhoun",
            ],
            [
                "name" => "Tantega",
            ],
            [
                "name" => "Tébiwogou",
            ],
            [
                "name" => "Féhoun",
            ],
            [
                "name" => "Fékérou",
            ],
            [
                "name" => "Koutoukondiga",
            ],
            [
                "name" => "Sakonou",
            ],
            [
                "name" => "Tchanhouncossi",
            ],
            [
                "name" => "Yanga",
            ],
            [
                "name" => "Yansaga",
            ],
            [
                "name" => "Bounta",
            ],
            [
                "name" => "Coroncoré",
            ],
            [
                "name" => "Cotiakou",
            ],
            [
                "name" => "Daguimagninni",
            ],
            [
                "name" => "Manougou",
            ],
            [
                "name" => "Nowêrèrè",
            ],
            [
                "name" => "Parabou",
            ],
            [
                "name" => "Pémombou",
            ],
            [
                "name" => "Penitingou",
            ],
            [
                "name" => "Tanféré",
            ],
            [
                "name" => "Toriconconé",
            ],
            [
                "name" => "Tora",
            ],
            [
                "name" => "Dondongou",
            ],
            [
                "name" => "Kougnieri",
            ],
            [
                "name" => "N’Dahonta",
            ],
            [
                "name" => "Natagata",
            ],
            [
                "name" => "Nignèri",
            ],
            [
                "name" => "Sammongou",
            ],
            [
                "name" => "Sonta",
            ],
            [
                "name" => "Tahinkou",
            ],
            [
                "name" => "Tapèkou",
            ],
            [
                "name" => "Tchaéta",
            ],
            [
                "name" => "Bongou",
            ],
            [
                "name" => "Douani",
            ],
            [
                "name" => "Finta",
            ],
            [
                "name" => "Hantèkou",
            ],
            [
                "name" => "Kogniga",
            ],
            [
                "name" => "Kotchekongou",
            ],
            [
                "name" => "Kouayoti",
            ],
            [
                "name" => "Koutchoutchougou",
            ],
            [
                "name" => "Matanrgui",
            ],
            [
                "name" => "Nafayoti",
            ],
            [
                "name" => "Nontingou",
            ],
            [
                "name" => "Ouankou",
            ],
            [
                "name" => "Tahongou",
            ],
            [
                "name" => "Taïacou",
            ],
            [
                "name" => "Yehongou",
            ],
            [
                "name" => "Yéyédi",
            ],
            [
                "name" => "Youakou",
            ],
            [
                "name" => "Biacou",
            ],
            [
                "name" => "Bourgniéssou",
            ],
            [
                "name" => "Djidjiré-Beri",
            ],
            [
                "name" => "Goro-bani",
            ],
            [
                "name" => "Mamoussa",
            ],
            [
                "name" => "Nanébou",
            ],
            [
                "name" => "Porhoum",
            ],
            [
                "name" => "Porka",
            ],
            [
                "name" => "Sépounga",
            ],
            [
                "name" => "Tchoutchoubou",
            ],
            [
                "name" => "Tiélé",
            ],
            [
                "name" => "Yarka",
            ],
            [
                "name" => "Batia",
            ],
            [
                "name" => "Kayarika",
            ],
            [
                "name" => "Sangou",
            ],
            [
                "name" => "Tanongou",
            ],
            [
                "name" => "Tchafarga",
            ],
            [
                "name" => "Tchatingou",
            ],
            [
                "name" => "Tchawassaka",
            ],
            [
                "name" => "Yangou",
            ],
            [
                "name" => "Bagoubagou",
            ],
            [
                "name" => "Bambaba",
            ],
            [
                "name" => "Bassini",
            ],
            [
                "name" => "Bérékossou",
            ],
            [
                "name" => "Brignamaro",
            ],
            [
                "name" => "Gando baka",
            ],
            [
                "name" => "Kongourou",
            ],
            [
                "name" => "Kossou",
            ],
            [
                "name" => "Kossou-Ouinra",
            ],
            [
                "name" => "Tchoukagnin",
            ],
            [
                "name" => "Yakrigorou",
            ],
            [
                "name" => "Baténin",
            ],
            [
                "name" => "Djoléni",
            ],
            [
                "name" => "Gori",
            ],
            [
                "name" => "Gorobani",
            ],
            [
                "name" => "Kabongourou",
            ],
            [
                "name" => "Sokoungourou",
            ],
            [
                "name" => "Yiroubara",
            ],
            [
                "name" => "Gnampoli",
            ],
            [
                "name" => "Gnampoli",
            ],
            [
                "name" => "Kaobagou",
            ],
            [
                "name" => "Yinsiga",
            ],
            [
                "name" => "Bakoussarou",
            ],
            [
                "name" => "Bipotoko",
            ],
            [
                "name" => "Boukoubourou",
            ],
            [
                "name" => "Fêtêkou",
            ],
            [
                "name" => "Fêtêkou -Alaga",
            ],
            [
                "name" => "Gamboré",
            ],
            [
                "name" => "Gantodo",
            ],
            [
                "name" => "Gnangnanou",
            ],
            [
                "name" => "Gougninnou",
            ],
            [
                "name" => "Karigourou",
            ],
            [
                "name" => "Kédarou",
            ],
            [
                "name" => "Kérou Wirou",
            ],
            [
                "name" => "Kokokou",
            ],
            [
                "name" => "Kparatégui",
            ],
            [
                "name" => "Manou",
            ],
            [
                "name" => "Ouoré",
            ],
            [
                "name" => "Pikiré-Adaga",
            ],
            [
                "name" => "Pikiré",
            ],
            [
                "name" => "Sinagourou",
            ],
            [
                "name" => "Toudakou Banyirou",
            ],
            [
                "name" => "Warou N’Gourou",
            ],
            [
                "name" => "Yakin-Motoko",
            ],
            [
                "name" => "Birni Maro",
            ],
            [
                "name" => "Birni-Kankoulka",
            ],
            [
                "name" => "Birni-Kpébirou",
            ],
            [
                "name" => "Gorgoba",
            ],
            [
                "name" => "Goufanrou",
            ],
            [
                "name" => "Hongon",
            ],
            [
                "name" => "Kouboro",
            ],
            [
                "name" => "Tamandé",
            ],
            [
                "name" => "Tassigourou",
            ],
            [
                "name" => "Yakabissi",
            ],
            [
                "name" => "Chabi Couma",
            ],
            [
                "name" => "Gantiéco",
            ],
            [
                "name" => "Gbéniki",
            ],
            [
                "name" => "Papatia",
            ],
            [
                "name" => "Sakasson-Ditamari",
            ],
            [
                "name" => "Sakasson-Dompago",
            ],
            [
                "name" => "Wémè",
            ],
            [
                "name" => "Boroyindé",
            ],
            [
                "name" => "Danri",
            ],
            [
                "name" => "Foo",
            ],
            [
                "name" => "Kabaré",
            ],
            [
                "name" => "Maka",
            ],
            [
                "name" => "Orouboussoukou",
            ],
            [
                "name" => "Tancé",
            ],
            [
                "name" => "Tikou",
            ],
            [
                "name" => "Boro",
            ],
            [
                "name" => "Damouti",
            ],
            [
                "name" => "Foo-mama",
            ],
            [
                "name" => "Gora -Peulh",
            ],
            [
                "name" => "Goutéré",
            ],
            [
                "name" => "Guilmaro-Bounkossorou",
            ],
            [
                "name" => "Guilmaro-Garkousson",
            ],
            [
                "name" => "Guilmaro-Sinakpagourou",
            ],
            [
                "name" => "Kèdékou",
            ],
            [
                "name" => "Kpakou-Tankonga",
            ],
            [
                "name" => "Kpikiré  koka",
            ],
            [
                "name" => "Nassoukou",
            ],
            [
                "name" => "Ouroufina",
            ],
            [
                "name" => "Séri",
            ],
            [
                "name" => "Sonnougobérou",
            ],
            [
                "name" => "Bassilou",
            ],
            [
                "name" => "Becket-Bouramè",
            ],
            [
                "name" => "Becket-Peulh",
            ],
            [
                "name" => "Boré",
            ],
            [
                "name" => "Darou-Wirou",
            ],
            [
                "name" => "Kpessinin",
            ],
            [
                "name" => "Makrou-Gourou",
            ],
            [
                "name" => "Maro",
            ],
            [
                "name" => "Mary",
            ],
            [
                "name" => "Sakabou",
            ],
            [
                "name" => "Sékogourou",
            ],
            [
                "name" => "Sékogourou-Baïla",
            ],
            [
                "name" => "Sinakpaworou",
            ],
            [
                "name" => "Sowa",
            ],
            [
                "name" => "Tokoro",
            ],
            [
                "name" => "Zongo",
            ],
            [
                "name" => "Boroukou-Peulh",
            ],
            [
                "name" => "Dèkèrou",
            ],
            [
                "name" => "Ganikpérou",
            ],
            [
                "name" => "Poupouré",
            ],
            [
                "name" => "Niarissinra",
            ],
            [
                "name" => "Niaro-Gninon",
            ],
            [
                "name" => "Orougbéni",
            ],
            [
                "name" => "Niarosson",
            ],
            [
                "name" => "Kètéré",
            ],
            [
                "name" => "Nièkènè-Bansou",
            ],
            [
                "name" => "Somboko",
            ],
            [
                "name" => "Kpankpankou",
            ],
            [
                "name" => "Oroukayo",
            ],
            [
                "name" => "Yinkènè",
            ],
            [
                "name" => "Pélima",
            ],
            [
                "name" => "Kpéssourou",
            ],
            [
                "name" => "Dikouan",
            ],
            [
                "name" => "Katanginka",
            ],
            [
                "name" => "Kouaba",
            ],
            [
                "name" => "Koukouabirgou",
            ],
            [
                "name" => "Kounitchangou",
            ],
            [
                "name" => "Koutanongou",
            ],
            [
                "name" => "Kouwanwangou",
            ],
            [
                "name" => "Moussansamou",
            ],
            [
                "name" => "Tagahei",
            ],
            [
                "name" => "Tedonté",
            ],
            [
                "name" => "Tipéti",
            ],
            [
                "name" => "Kouandata",
            ],
            [
                "name" => "Kouatidabirgou",
            ],
            [
                "name" => "Kounadorgou",
            ],
            [
                "name" => "Koutie",
            ],
            [
                "name" => "Tigninti",
            ],
            [
                "name" => "Bangrétamou",
            ],
            [
                "name" => "Dokondé",
            ],
            [
                "name" => "Fayouré",
            ],
            [
                "name" => "Kampouya",
            ],
            [
                "name" => "Kota-Monnongou",
            ],
            [
                "name" => "Kotopounga",
            ],
            [
                "name" => "Onsikoto",
            ],
            [
                "name" => "Pouya",
            ],
            [
                "name" => "Souroukou",
            ],
            [
                "name" => "Tampèdèma",
            ],
            [
                "name" => "Tchantangou",
            ],
            [
                "name" => "Wètipounga",
            ],
            [
                "name" => "Yakpangoutingou",
            ],
            [
                "name" => "Yarikou",
            ],
            [
                "name" => "Ditawan",
            ],
            [
                "name" => "Doyakou",
            ],
            [
                "name" => "Koudengou",
            ],
            [
                "name" => "Péporiyakou",
            ],
            [
                "name" => "Tétanté",
            ],
            [
                "name" => "Tikouani",
            ],
            [
                "name" => "Toroubou",
            ],
            [
                "name" => "Gnagnammou",
            ],
            [
                "name" => "Koka",
            ],
            [
                "name" => "Koubirgou",
            ],
            [
                "name" => "Kouètèna",
            ],
            [
                "name" => "Kounapèigou",
            ],
            [
                "name" => "Koupéico",
            ],
            [
                "name" => "Koussigou",
            ],
            [
                "name" => "Pam-pam",
            ],
            [
                "name" => "Perma Centre",
            ],
            [
                "name" => "Sinaïciré",
            ],
            [
                "name" => "Tènounkontè",
            ],
            [
                "name" => "Tèpéntè",
            ],
            [
                "name" => "Tignanpéti",
            ],
            [
                "name" => "Bagri",
            ],
            [
                "name" => "Djindjiré-béri",
            ],
            [
                "name" => "Kantchagoutamou",
            ],
            [
                "name" => "Sountchirantikou",
            ],
            [
                "name" => "Tchirimina",
            ],
            [
                "name" => "Yokossi",
            ],
            [
                "name" => "Bokoro",
            ],
            [
                "name" => "Boriyouré",
            ],
            [
                "name" => "Dassakaté",
            ],
            [
                "name" => "Ouroubonna",
            ],
            [
                "name" => "Ourkparbou",
            ],
            [
                "name" => "Santa",
            ],
            [
                "name" => "Bérécingou",
            ],
            [
                "name" => "Didapoumbor",
            ],
            [
                "name" => "Kantaborifa",
            ],
            [
                "name" => "Koussantikou",
            ],
            [
                "name" => "Ourbouga",
            ],
            [
                "name" => "Winkè",
            ],
            [
                "name" => "Yétapo",
            ],
            [
                "name" => "Yimporima",
            ],
            [
                "name" => "Koutié Tchatido",
            ],
            [
                "name" => "Kouwa n’pongou",
            ],
            [
                "name" => "Moupémou",
            ],


            [
                "name" => "Takonta",
            ],
            [
                "name" => "Tchoumi-tchoumi",
            ],
            [
                "name" => "Wimmou",
            ],
            [
                "name" => "Bonigourou",
            ],
            [
                "name" => "Dôh",
            ],
            [
                "name" => "Gnémasson",
            ],
            [
                "name" => "Gnémasson-Gando",
            ],
            [
                "name" => "Sayakrou",
            ],
            [
                "name" => "Sayakrou – Gah",
            ],
            [
                "name" => "Bêket",
            ]
        ];
        foreach ($areas as $area) {
            \App\Models\Area::factory()->create($area);
        };

        ##======== CREATION DES TYPES DE MAISONS ============####
        $houseTypes = [
            [
                "name" => "MNDCCom",
                "description" => "Maison non dallée cours communne",
            ],
            [
                "name" => "R1",
                "description" => "Maison R+1",
            ],
            [
                "name" => "R2",
                "description" => "Maison R+2",
            ],
            [
                "name" => "MEUBLEE",
                "description" => "Meublée",
            ],
        ];

        foreach ($houseTypes as $houseType) {
            \App\Models\HouseType::factory()->create($houseType);
        };

        ##======== CREATION DES TYPES DE COMPTEUR ============####
        $counterTypes = [
            [
                "name" => "Elestronique",
                "description" => "compteurs électroniques",
            ],
            [
                "name" => "Electromagnetiques",
                "description" => "compteurs électromécaniques",
            ]
        ];

        foreach ($counterTypes as $counterType) {
            \App\Models\CounterType::factory()->create($counterType);
        };

        ##======== CREATION DES CURRENCIES ============####
        $currencies = [
            [
                "name" => "(South) Korean Won",
                "iso" => "KRW",
            ],
            [
                "name" => "Afghanistan Afghani",
                "iso" => "AFA",
            ],
            [
                "name" => "Albanian Lek",
                "iso" => "ALL",
            ],
            [
                "name" => "Algerian Dinar",
                "iso" => "DZD",
            ],
            [
                "name" => "Andorran Peseta",
                "iso" => "ADP",
            ],
            [
                "name" => "Angolan Kwanza",
                "iso" => "AOK",
            ],
            [
                "name" => "Argentine Peso",
                "iso" => "ARS",
            ],
            [
                "name" => "Armenian Dram",
                "iso" => "AMD",
            ],
            [
                "name" => "Aruban Florin",
                "iso" => "AWG",
            ],
            [
                "name" => "Australian Dollar",
                "iso" => "AUD",
            ],
            [
                "name" => "Bahamian Dollar",
                "iso" => "BSD",
            ],
            [
                "name" => "Bahraini Dinar",
                "iso" => "BHD",
            ],
            [
                "name" => "Bangladeshi Taka",
                "iso" => "BDT",
            ],
            [
                "name" => "Barbados Dollar",
                "iso" => "BBD",
            ],
            [
                "name" => "Belize Dollar",
                "iso" => "BMD",
            ],
            [
                "name" => "Bhutan Ngultrum",
                "iso" => "BTN",
            ],
            [
                "name" => "Bhutan Ngultrum",
                "iso" => "BOB",
            ],
            [
                "name" => "Botswanian Pula",
                "iso" => "BWP",
            ],
            [
                "name" => "Brazilian Real",
                "iso" => "BRL",
            ],
            [
                "name" => "British Pound",
                "iso" => "GBP",
            ],
            [
                "name" => "Brunei Dollar",
                "iso" => "BND",
            ],
            [
                "name" => "Bulgarian Lev",
                "iso" => "BGN",
            ],
            [
                "name" => "Burma Kyat",
                "iso" => "BUK",
            ],
            [
                "name" => "Burundi Franc",
                "iso" => "BIF",
            ],
            [
                "name" => "Canadian Dollar",
                "iso" => "CAD",
            ],
            [
                "name" => "Cape Verde Escudo",
                "iso" => "CVE",
            ],
            [
                "name" => "Cayman Islands Dollar",
                "iso" => "KYD",
            ],
            [
                "name" => "Chilean Peso",
                "iso" => "CLP",
            ],
            [
                "name" => "Chilean Unidades de Fomento",
                "iso" => "CLF",
            ],
            [
                "name" => "Colombian Peso",
                "iso" => "COP",
            ],
            [
                "name" => "Communauté Financière Africaine BCEAO - Francs",
                "iso" => "XOF",
            ],
            [
                "name" => "Communauté Financière Africaine BEAC, Francs",
                "iso" => "XAF",
            ],
            [
                "name" => "Comoros Franc",
                "iso" => "KMF",
            ],
            [
                "name" => "Comptoirs Français du Pacifique Francs",
                "iso" => "XPF",
            ],
            [
                "name" => "Costa Rican Colon",
                "iso" => "CRC",
            ],
            [
                "name" => "Cuban Peso",
                "iso" => "CUP",
            ],
            [
                "name" => "Cyprus Pound",
                "iso" => "CYP",
            ],
            [
                "name" => "Czech Republic Koruna",
                "iso" => "CZK",
            ],
            [
                "name" => "Danish Krone",
                "iso" => "DKK",
            ],
            [
                "name" => "Democratic Yemeni Dinar",
                "iso" => "YDD",
            ],
            [
                "name" => "Dominican Peso",
                "iso" => "DOP",
            ],
            [
                "name" => "East Caribbean Dollar",
                "iso" => "XCD",
            ],
            [
                "name" => "East Timor Escudo",
                "iso" => "TPE",
            ],
            [
                "name" => "Ecuador Sucre",
                "iso" => "ECS",
            ],
            [
                "name" => "Egyptian Pound",
                "iso" => "EGP",
            ],
            [
                "name" => "El Salvador Colon",
                "iso" => "SVC",
            ],
            [
                "name" => "Estonian Kroon (EEK)",
                "iso" => "EEK",
            ],
            [
                "name" => "Ethiopian Birr",
                "iso" => "ETB",
            ],
            [
                "name" => "Euro",
                "iso" => "EUR",
            ],
            [
                "name" => "Falkland Islands Pound",
                "iso" => "FKP",
            ],
            [
                "name" => "Fiji Dollar",
                "iso" => "FJD",
            ],
            [
                "name" => "Gambian Dalasi",
                "iso" => "GMD",
            ],
            [
                "name" => "Ghanaian Cedi",
                "iso" => "GHC",
            ],
            [
                "name" => "Gibraltar Pound",
                "iso" => "GIP",
            ],
            [
                "name" => "Gold, Ounces",
                "iso" => "XAU",
            ],
            [
                "name" => "Guatemalan Quetzal",
                "iso" => "GTQ",
            ],
            [
                "name" => "Guinea Franc",
                "iso" => "GNF",
            ],
            [
                "name" => "Guinea-Bissau Peso",
                "iso" => "GWP",
            ],
            [
                "name" => "Guyanan Dollar",
                "iso" => "GYD",
            ],
            [
                "name" => "Haitian Gourde",
                "iso" => "HTG",
            ],
            [
                "name" => "Honduran Lempira",
                "iso" => "HNL",
            ],
            [
                "name" => "Hong Kong Dollar",
                "iso" => "HKD",
            ],
            [
                "name" => "Hungarian Forint",
                "iso" => "HUF",
            ],
            [
                "name" => "Indian Rupee",
                "iso" => "INR",
            ],
            [
                "name" => "Indonesian Rupiah",
                "iso" => "IDR",
            ],
            [
                "name" => "International Monetary Fund (IMF) Special Drawing Rights",
                "iso" => "XDR",
            ],
            [
                "name" => "Iranian Rial",
                "iso" => "IRR",
            ],
            [
                "name" => "Iraqi Dinar",
                "iso" => "IQD",
            ],
            [
                "name" => "Irish Punt",
                "iso" => "IEP",
            ],
            [
                "name" => "Israeli Shekel",
                "iso" => "ILS",
            ],
            [
                "name" => "Jamaican Dollar",
                "iso" => "JMD",
            ],
            [
                "name" => "Japanese Yen",
                "iso" => "JPY",
            ],
            [
                "name" => "Jordanian Dinar",
                "iso" => "JOD",
            ],
            [
                "name" => "Kampuchean (Cambodian) Riel",
                "iso" => "KHR",
            ],
            [
                "name" => "Kenyan Schilling",
                "iso" => "KES",
            ],
            [
                "name" => "Kuwaiti Dinar",
                "iso" => "KWD",
            ],
            [
                "name" => "Lao Kip",
                "iso" => "LAK",
            ],
            [
                "name" => "Lebanese Pound",
                "iso" => "LBP",
            ],
            [
                "name" => "Lesotho Loti",
                "iso" => "LSL",
            ],
            [
                "name" => "Liberian Dollar",
                "iso" => "LRD",
            ],
            [
                "name" => "Libyan Dinar",
                "iso" => "LYD",
            ],
            [
                "name" => "Macau Pataca",
                "iso" => "MOP",
            ],
            [
                "name" => "Malagasy Franc",
                "iso" => "MGF",
            ],
            [
                "name" => "Malawi Kwacha",
                "iso" => "MWK",
            ],
            [
                "name" => "Malaysian Ringgit",
                "iso" => "MYR",
            ],
            [
                "name" => "Maldive Rufiyaa",
                "iso" => "MVR",
            ],
            [
                "name" => "Maltese Lira",
                "iso" => "MTL",
            ],
            [
                "name" => "Mauritanian Ouguiya",
                "iso" => "MRO",
            ],
            [
                "name" => "Mauritius Rupee",
                "iso" => "MUR",
            ],
            [
                "name" => "Mexican Peso",
                "iso" => "MXP",
            ],
            [
                "name" => "Mongolian Tugrik",
                "iso" => "MNT",
            ],
            [
                "name" => "Moroccan Dirham",
                "iso" => "MAD",
            ],
            [
                "name" => "Mozambique Metical",
                "iso" => "MZM",
            ],
            [
                "name" => "Namibian Dollar",
                "iso" => "NAD",
            ],
            [
                "name" => "Nepalese Rupee",
                "iso" => "NPR",
            ],
            [
                "name" => "Netherlands Antillian Guilder",
                "iso" => "ANG",
            ],
            [
                "name" => "New Yugoslavia Dinar",
                "iso" => "YUD",
            ],
            [
                "name" => "New Zealand Dollar",
                "iso" => "NZD",
            ],
            [
                "name" => "Nicaraguan Cordoba",
                "iso" => "NIO",
            ],
            [
                "name" => "Nigerian Naira",
                "iso" => "NGN",
            ],
            [
                "name" => "North Korean Won",
                "iso" => "KPW",
            ],
            [
                "name" => "Norwegian Kroner",
                "iso" => "NOK",
            ],
            [
                "name" => "Omani Rial",
                "iso" => "OMR",
            ],
            [
                "name" => "Pakistan Rupee",
                "iso" => "PKR",
            ],
            [
                "name" => "Palladium Ounces",
                "iso" => "XPD",
            ],
            [
                "name" => "Panamanian Balboa",
                "iso" => "PAB",
            ],
            [
                "name" => "Papua New Guinea Kina",
                "iso" => "PGK",
            ],
            [
                "name" => "Paraguay Guarani",
                "iso" => "PYG",
            ],
            [
                "name" => "Peruvian Nuevo Sol",
                "iso" => "PEN",
            ],
            [
                "name" => "Philippine Peso",
                "iso" => "PHP",
            ],
            [
                "name" => "Platinum, Ounces",
                "iso" => "XPT",
            ],
            [
                "name" => "Polish Zloty",
                "iso" => "PLN",
            ],
            [
                "name" => "Qatari Rial",
                "iso" => "QAR",
            ],
            [
                "name" => "Romanian Leu",
                "iso" => "RON",
            ],
            [
                "name" => "Russian Ruble",
                "iso" => "RUB",
            ],
            [
                "name" => "Rwanda Franc",
                "iso" => "RWF",
            ],
            [
                "name" => "Samoan Tala",
                "iso" => "WST",
            ],
            [
                "name" => "Sao Tome and Principe Dobra",
                "iso" => "STD",
            ],
            [
                "name" => "Saudi Arabian Riyal",
                "iso" => "SAR",
            ],
            [
                "name" => "Seychelles Rupee",
                "iso" => "SCR",
            ],
            [
                "name" => "Sierra Leone Leone",
                "iso" => "SLL",
            ],
            [
                "name" => "Silver, Ounces",
                "iso" => "XAG",
            ],
            [
                "name" => "Singapore Dollar",
                "iso" => "SGD",
            ],
            [
                "name" => "Slovak Koruna",
                "iso" => "SKK",
            ],
            [
                "name" => "Solomon Islands Dollar",
                "iso" => "SBD",
            ],
            [
                "name" => "Somali Schilling",
                "iso" => "SOS",
            ],
            [
                "name" => "South African Rand",
                "iso" => "ZAR",
            ],
            [
                "name" => "Sri Lanka Rupee",
                "iso" => "LKR",
            ],
            [
                "name" => "St. Helena Pound",
                "iso" => "SHP",
            ],
            [
                "name" => "Sudanese Pound",
                "iso" => "SDP",
            ],
            [
                "name" => "Suriname Guilder",
                "iso" => "SRG",
            ],
            [
                "name" => "Swaziland Lilangeni",
                "iso" => "SZL",
            ],
            [
                "name" => "Swedish Krona",
                "iso" => "SEK",
            ],
            [
                "name" => "Swiss Franc",
                "iso" => "CHF",
            ],
            [
                "name" => "Syrian Potmd",
                "iso" => "SYP",
            ],
            [
                "name" => "Taiwan Dollar",
                "iso" => "TWD",
            ],
            [
                "name" => "Tanzanian Schilling",
                "iso" => "TZS",
            ],
            [
                "name" => "Thai Baht",
                "iso" => "THB",
            ],
            [
                "name" => "Tongan Paanga",
                "iso" => "TOP",
            ],
            [
                "name" => "Trinidad and Tobago Dollar",
                "iso" => "TTD",
            ],
            [
                "name" => "Tunisian Dinar",
                "iso" => "TND",
            ],
            [
                "name" => "Turkish Lira",
                "iso" => "TRY",
            ],
            [
                "name" => "Uganda Shilling",
                "iso" => "UGX",
            ],
            [
                "name" => "United Arab Emirates Dirham",
                "iso" => "AED",
            ],
            [
                "name" => "Uruguayan Peso",
                "iso" => "UYU",
            ],
            [
                "name" => "US Dollar",
                "iso" => "USD",
            ],
            [
                "name" => "Vanuatu Vatu",
                "iso" => "VUV",
            ],
            [
                "name" => "Venezualan Bolivar",
                "iso" => "VEF",
            ],
            [
                "name" => "Vietnamese Dong",
                "iso" => "VND",
            ],
            [
                "name" => "Yemeni Rial",
                "iso" => "YER",
            ],
            [
                "name" => "Yuan (Chinese) Renminbi",
                "iso" => "CNY",
            ],
            [
                "name" => "Zaire Zaire",
                "iso" => "ZRZ",
            ],
            [
                "name" => "Zambian Kwacha",
                "iso" => "ZMK",
            ],
            [
                "name" => "Zimbabwe Dollar",
                "iso" => "ZWD",
            ]
        ];

        foreach ($currencies as $currencie) {
            \App\Models\Currency::factory()->create($currencie);
        };

        ##======== CREATION DES TYPES DE CARD ============####
        $cardTypes = [
            [
                "name" => "CIN",
            ],
            [
                "name" => "LEPI",
            ],
            [
                "name" => "PASSPORT",
            ]
        ];

        foreach ($cardTypes as $cardType) {
            \App\Models\CardType::factory()->create($cardType);
        };


        ##======== CREATION DES DEPARTEMENTS ============####

        $departements = [
            [
                "name" => "Ouémé",
            ],
            [
                "name" => "Plateau",
            ],
            [
                "name" => "Atlantique",
            ],
            [
                "name" => "Littoral",
            ],
            [
                "name" => "Atlantique",
            ],
            [
                "name" => "Mono",
            ],
            [
                "name" => "Couffo",
            ],
            [
                "name" => "Zou",
            ],
            [
                "name" => "Collines",
            ],
            [
                "name" => "Donga",
            ],
            [
                "name" => "Borgou",
            ],
            [
                "name" => "Alibori",
            ],
            [
                "name" => "Atacora",
            ]
        ];

        foreach ($departements as $departement) {
            \App\Models\Departement::factory()->create($departement);
        };


        ##======== CREATION DES TYPES DE CHAMBRE ============####
        $roomTypes = [
            [
                "name" => "2CH1S",
                "description" => "2 Chambres, 1 Salon",
            ],
            [
                "name" => "1CH1S",
                "description" => "1 Chambre, 1 Salon",
            ],
            [
                "name" => "3CH1S",
                "description" => "3 Chambres, 1 Salon",
            ],
            [
                "name" => "MAGASIN",
                "description" => "Magasin",
            ],
            [
                "name" => "STUDIO",
                "description" => "Studio",
            ],
            [
                "name" => "BOUTIQUE",
                "description" => "Boutique",
            ],
            [
                "name" => "PARCELLE NUE",
                "description" => "Parcelle nue",
            ]
        ];

        foreach ($roomTypes as $roomType) {
            \App\Models\RoomType::factory()->create($roomType);
        };



        ##======== CREATION DES NATURES DE CHAMBRE ============####
        $roomNatures = [
            [
                "name" => "SANITAIRE",
                "description" => "Sanitaire non meublée",
            ],
            [
                "name" => "ORDINANIRE",
                "description" => "Ordinaire",
            ],
            [
                "name" => "SEMI",
                "description" => "Semi Sanitaire",
            ],
            [
                "name" => "SANITAIRE-MEUBLEE",
                "description" => "Sanitaire meublée",
            ]
        ];

        foreach ($roomNatures as $roomNature) {
            \App\Models\RoomNature::factory()->create($roomNature);
        };


        ##======== CREATION DES ZONES ============####
        $zones = [
            [
                "name" => "Angaradebou",
                "city" => 1,
            ],
            [
                "name" => "Bensekou",
                "city" => 1,
            ],
            [
                "name" => "Donwari",
                "city" => 1,
            ],
            [
                "name" => "Kandi 1",
                "city" => 1,
            ],
            [
                "name" => "Kandi 2",
                "city" => 1,
            ],
            [
                "name" => "Kandi 3",
                "city" => 1,
            ],
            [
                "name" => "Kassakou",
                "city" => 1,
            ],
            [
                "name" => "Saah",
                "city" => 1,
            ],
            [
                "name" => "Sam",
                "city" => 1,
            ],
            [
                "name" => "Sonsoro",
                "city" => 1,
            ],
            [
                "name" => "Garou",
                "city" => 2,
            ],
            [
                "name" => "Guéné",
                "city" => 2,
            ],
            [
                "name" => "Madécali",
                "city" => 2,
            ],
            [
                "name" => "Malanville",
                "city" => 2,
            ],
            [
                "name" => "Tomboutou",
                "city" => 2,
            ],
            [
                "name" => "Birni Lafia",
                "city" => 3,
            ],
            [
                "name" => "Bogo-Bogo",
                "city" => 3,
            ],
            [
                "name" => "Karimama",
                "city" => 3,
            ],
            [
                "name" => "Kompa",
                "city" => 3,
            ],
            [
                "name" => "Monsey",
                "city" => 3,
            ],
            [
                "name" => "Banikoara",
                "city" => 4,
            ],
            [
                "name" => "Founougo",
                "city" => 4,
            ],
            [
                "name" => "Gomparou",
                "city" => 4,
            ],
            [
                "name" => "Goumori",
                "city" => 4,
            ],
            [
                "name" => "Kokey",
                "city" => 4,
            ],
            [
                "name" => "Kokiborou",
                "city" => 4,
            ],
            [
                "name" => "Ounet",
                "city" => 4,
            ],
            [
                "name" => "Sompéroukou",
                "city" => 4,
            ],
            [
                "name" => "Soroko",
                "city" => 4,
            ],
            [
                "name" => "Toura",
                "city" => 4,
            ],



            [
                "name" => "Bagou",
                "city" => 5,
            ],
            [
                "name" => "Gogounou",
                "city" => 5,
            ],
            [
                "name" => "Gounarou",
                "city" => 5,
            ],
            [
                "name" => "Sori",
                "city" => 5,
            ],
            [
                "name" => "Sougou-Kpan-Trossi",
                "city" => 5,
            ],
            [
                "name" => "Wara",
                "city" => 5,
            ],
            [
                "name" => "Libante",
                "city" => 6,
            ],
            [
                "name" => "Liboussou",
                "city" => 6,
            ],
            [
                "name" => "Liboussou",
                "city" => 6,
            ],
            [
                "name" => "Lougou",
                "city" => 6,
            ],
            [
                "name" => "Ségbana",
                "city" => 6,
            ],
            [
                "name" => "Sokotindji",
                "city" => 6,
            ],
            [
                "name" => "Boukoumbé",
                "city" => 7,
            ],
            [
                "name" => "Dipoli",
                "city" => 7,
            ],
            [
                "name" => "Korontiere",
                "city" => 7,
            ],
            [
                "name" => "Koussoucoingou",
                "city" => 7,
            ],
            [
                "name" => "Manta",
                "city" => 7,
            ],
            [
                "name" => "Nata",
                "city" => 7,
            ],
            [
                "name" => "Tabota",
                "city" => 7,
            ],
            [
                "name" => "Cobly",
                "city" => 8,
            ],
            [
                "name" => "Tapoga",
                "city" => 8,
            ],
            [
                "name" => "Datori",
                "city" => 8,
            ],
            [
                "name" => "Kountori",
                "city" => 8,
            ],
            [
                "name" => "Dassari",
                "city" => 9,
            ],
            [
                "name" => "Gouandé",
                "city" => 9,
            ],
            [
                "name" => "Matéri",
                "city" => 9,
            ],
            [
                "name" => "Nodi	",
                "city" => 9,
            ],
            [
                "name" => "Tantega",
                "city" => 9,
            ],
            [
                "name" => "Tchanhouncossi",
                "city" => 9,
            ],
            [
                "name" => "Cotiakou",
                "city" => 10,
            ],
            [
                "name" => "N'Dahonta",
                "city" => 10,
            ],
            [
                "name" => "Taiacou",
                "city" => 10,
            ],
            [
                "name" => "Tanguiéta",
                "city" => 10,
            ],
            [
                "name" => "Tanongou",
                "city" => 10,
            ],
            [
                "name" => "Brignamaro",
                "city" => 11,
            ],
            [
                "name" => "Firou",
                "city" => 11,
            ],
            [
                "name" => "Kaobagou	",
                "city" => 11,
            ],
            [
                "name" => "Kérou",
                "city" => 11,
            ],
            [
                "name" => "Birni",
                "city" => 12,
            ],
            [
                "name" => "Foo-Tance",
                "city" => 12,
            ],
            [
                "name" => "Guilmaro",
                "city" => 12,
            ],
            [
                "name" => "Kouandé",
                "city" => 12,
            ],
            [
                "name" => "Oroukayo",
                "city" => 12,
            ],
            [
                "name" => "Kouaba",
                "city" => 13,
            ],
            [
                "name" => "Kouandata",
                "city" => 13,
            ],
            [
                "name" => "Kotopounga",
                "city" => 13,
            ],
            [
                "name" => "Peporiyakou",
                "city" => 13,
            ],
            [
                "name" => "Perma",
                "city" => 13,
            ],
            [
                "name" => "Natitingou 1",
                "city" => 13,
            ],
            [
                "name" => "Natitingou 2",
                "city" => 13,
            ],
            [
                "name" => "Natitingou 3",
                "city" => 13,
            ],
            [
                "name" => "Tchoumi-Tchoumi",
                "city" => 13,
            ],
            [
                "name" => "Gnemasson",
                "city" => 14,
            ],
            [
                "name" => "Pehunco",
                "city" => 14,
            ],
            [
                "name" => "Tobré",
                "city" => 14,
            ],
            [
                "name" => "Kouarfa",
                "city" => 15,
            ],
            [
                "name" => "Tampégré",
                "city" => 15,
            ],
            [
                "name" => "Toukountouna",
                "city" => 15,
            ],
            [
                "name" => "Agbanou",
                "city" => 15,
            ],
            [
                "name" => "Allada Centre",
                "city" => 16,
            ],
            [
                "name" => "Attogon",
                "city" => 16,
            ],
            [
                "name" => "Avakpa",
                "city" => 16,
            ],
            [
                "name" => "Ayou",
                "city" => 16,
            ],
            [
                "name" => "Hinvi",
                "city" => 16,
            ],
            [
                "name" => "Lissègazoun",
                "city" => 16,
            ],
            [
                "name" => "Lon-Agonmey",
                "city" => 16,
            ],
            [
                "name" => "Sékou",
                "city" => 16,
            ],
            [
                "name" => "Togoudo",
                "city" => 16,
            ],
            [
                "name" => "Tokpa",
                "city" => 16,
            ],
            [
                "name" => "Agbanto",
                "city" => 17,
            ],
            [
                "name" => "Agonkanmè",
                "city" => 17,
            ],
            [
                "name" => "Dékanmè",
                "city" => 17,
            ],
            [
                "name" => "Dédomè",
                "city" => 17,
            ],
            [
                "name" => "Kpomassè Centre",
                "city" => 17,
            ],
            [
                "name" => "Sègbèya",
                "city" => 17,
            ],
            [
                "name" => "Sègbohouè",
                "city" => 17,
            ],
            [
                "name" => "Tokpa-Domè",
                "city" => 17,
            ],
            [
                "name" => "Avlékété",
                "city" => 18,
            ],
            [
                "name" => "Djègbadji",
                "city" => 18,
            ],
            [
                "name" => "Gakpé",
                "city" => 18,
            ],
            [
                "name" => "Houakpè-Daho",
                "city" => 18,
            ],
            [
                "name" => "Pahou",
                "city" => 18,
            ],
            [
                "name" => "Ouidah 1",
                "city" => 18,
            ],
            [
                "name" => "Ouidah 2",
                "city" => 18,
            ],
            [
                "name" => "Ouidah 3",
                "city" => 18,
            ],
            [
                "name" => "Ouidah 4",
                "city" => 18,
            ],
            [
                "name" => "Savi",
                "city" => 18,
            ],
            [
                "name" => "Agué",
                "city" => 19,
            ],
            [
                "name" => "Colli",
                "city" => 19,
            ],
            [
                "name" => "Coussi",
                "city" => 19,
            ],
            [
                "name" => "Damè",
                "city" => 19,
            ],
            [
                "name" => "Djanglanmè",
                "city" => 19,
            ],
            [
                "name" => "Kpomè",
                "city" => 19,
            ],
            [
                "name" => "Houègbo",
                "city" => 19,
            ],
            [
                "name" => "Houègbo",
                "city" => 19,
            ],
            [
                "name" => "Sèhouè",
                "city" => 19,
            ],
            [
                "name" => "Sey",
                "city" => 19,
            ],
            [
                "name" => "Toffo",
                "city" => 19,
            ],
            [
                "name" => "Avamè",
                "city" => 20,
            ],
            [
                "name" => "Azohouè-Aliho",
                "city" => 20,
            ],
            [
                "name" => "Tori-Cada",
                "city" => 20,
            ],
            [
                "name" => "	Tori-Gare",
                "city" => 20,
            ],
            [
                "name" => "	Tori-Bossito",
                "city" => 20,
            ],
            [
                "name" => "Abomey-Calavi",
                "city" => 21,
            ],
            [
                "name" => "Akassato",
                "city" => 21,
            ],
            [
                "name" => "Golo-Djigbé",
                "city" => 21,
            ],
            [
                "name" => "Godomey",
                "city" => 21,
            ],
            [
                "name" => "Hèvié",
                "city" => 21,
            ],
            [
                "name" => "Kpanroun",
                "city" => 21,
            ],
            [
                "name" => "Ouèdo",
                "city" => 21,
            ],
            [
                "name" => "Togba",
                "city" => 21,
            ],
            [
                "name" => "Zinvié",
                "city" => 21,
            ],
            [
                "name" => "Ahomey-Lokpo",
                "city" => 22,
            ],
            [
                "name" => "Dékanmey",
                "city" => 22,
            ],
            [
                "name" => "Ganvié 1",
                "city" => 22,
            ],
            [
                "name" => "Ganvié 2",
                "city" => 22,
            ],
            [
                "name" => "Houedo-Aguekon",
                "city" => 22,
            ],
            [
                "name" => "Sô-Ava",
                "city" => 22,
            ]
        ];

        foreach ($zones as $zone) {
            \App\Models\Zone::factory()->create($zone);
        };


        ##======== CREATION DES QUARTIERS ============####
        $quartiers = [
            [
                "name" => "Ambatta",
            ],
            [
                "name" => "Kilwiti",
            ],
            [
                "name" => "14 Villas",
            ],
            [
                "name" => "15 ans 1",
            ],
            [
                "name" => "15 ans 2",
            ],
            [
                "name" => "Abadago",
            ],
            [
                "name" => "Aballa",
            ],
            [
                "name" => "Abato",
            ],
            [
                "name" => "Abatta",
            ],
            [
                "name" => "Abayahoué",
            ],
            [
                "name" => "Abba",
            ],
            [
                "name" => "Abéokouta",
            ],
            [
                "name" => "Abiadji-Sogoudo",
            ],
            [
                "name" => "Abidomey",
            ],
            [
                "name" => "Abigo",
            ],
            [
                "name" => "Abikouholi",
            ],
            [
                "name" => "Abintaga",
            ],
            [
                "name" => "Ablodé",
            ],
            [
                "name" => "Abloganmè",
            ],
            [
                "name" => "Ablomey",
            ],
            [
                "name" => "Abobokomè",
            ],
            [
                "name" => "Abogomè",
            ],
            [
                "name" => "Abogomè-Hlihouè",
            ],
            [
                "name" => "Abokicodji Centre",
            ],
            [
                "name" => "Abokicodji Lagune",
            ],
            [
                "name" => "Abolou",
            ],
            [
                "name" => "Aboloumè",
            ],
            [
                "name" => "Aboti",
            ],
            [
                "name" => "Abovey",
            ],
            [
                "name" => "Acadjamè",
            ],
            [
                "name" => "Acclohoué",
            ],
            [
                "name" => "Accron-Gogankomey",
            ],
            [
                "name" => "Achawayil",
            ],
            [
                "name" => "Achitou",
            ],
            [
                "name" => "Aclonmè",
            ],
            [
                "name" => "Ada-Kpané",
            ],
            [
                "name" => "Adagamè-Lisèzou",
            ],
            [
                "name" => "Adahoué",
            ],
            [
                "name" => "Adakplamè",
            ],
            [
                "name" => "Adamè",
            ],
            [
                "name" => "Adamè Adato",
            ],
            [
                "name" => "Adamè Ahito",
            ],
            [
                "name" => "Adamè Houeglo",
            ],
            [
                "name" => "Adamou-Kpara",
            ],
            [
                "name" => "Adandéhoué",
            ],
            [
                "name" => "Adandopkodji",
            ],
            [
                "name" => "Adandéhoué",
            ],
            [
                "name" => "Adandro-Akodé",
            ],
            [
                "name" => "Adanhondjigon",
            ],
            [
                "name" => "Adankpé",
            ],
            [
                "name" => "Adankpossi",
            ],
            [
                "name" => "Adanlopké",
            ],
            [
                "name" => "Adanmayi",
            ],
            [
                "name" => "Adanminakougon",
            ],
            [
                "name" => "Adawémè",
            ],
            [
                "name" => "Adawlato",
            ],
            [
                "name" => "Adédéwo",
            ],
            [
                "name" => "Adétikopé",
            ],
            [
                "name" => "Adhamè",
            ],
            [
                "name" => "Adidevo",
            ],
            [
                "name" => "Adido",
            ],
            [
                "name" => "Adihinlidji",
            ],
            [
                "name" => "Adikogon",
            ],
            [
                "name" => "Adikogon",
            ],
            [
                "name" => "Adimado",
            ],
            [
                "name" => "Adimalé",
            ],
            [
                "name" => "Adingnigon",
            ],
            [
                "name" => "Adja",
            ],
            [
                "name" => "Adjacomè",
            ],
            [
                "name" => "Adjadangan",
            ],
            [
                "name" => "Adjadji-Atinkousa",
            ],
            [
                "name" => "Adjadji-Bata",
            ],
            [
                "name" => "Adjadji-Cossoé",
            ],
            [
                "name" => "Adjadji-Zoungbom",
            ],
            [
                "name" => "Adjagbo",
            ],
            [
                "name" => "Adjagbo-Aidjèdo",
            ],
            [
                "name" => "Adjaglimey",
            ],
            [
                "name" => "Adjaglo",
            ],
            [
                "name" => "Adjaha",
            ],
            [
                "name" => "Adjaha-Cité",
            ],
            [
                "name" => "Adjahassa",
            ],
            [
                "name" => "Adjaho",
            ],
            [
                "name" => "Adjahonmè",
            ],
            [
                "name" => "Adjahigbonou",
            ],
            [
                "name" => "Adjakamè",
            ],
            [
                "name" => "Adjamè",
            ],
            [
                "name" => "Adjan",
            ],
            [
                "name" => "Adjan-Gla",
            ],
            [
                "name" => "Adjan-Houéta",
            ],
            [
                "name" => "Adjantè",
            ],
            [
                "name" => "Adjassagnon",
            ],
            [
                "name" => "Adjassinhoun - Condji",
            ]
        ];

        foreach ($quartiers as $quartier) {
            \App\Models\Quarter::factory()->create($quartier);
        };
    }
}
