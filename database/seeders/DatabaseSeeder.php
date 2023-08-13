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
    }
}
