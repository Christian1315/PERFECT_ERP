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
    }
}
