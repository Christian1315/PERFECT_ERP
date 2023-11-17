<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies_elected_consulars', function (Blueprint $table) {
            $table->id();
            ##__
            $table->foreignId("company_id")
                ->nullable()
                ->constrained("companies", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
                
            $table->foreignId("elected_consular")
                ->nullable()
                ->constrained("elected_consulars", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            ##___L'elu consulaire occupe une **fonction** dans une entreprise avec une mandature donnée
            $table->foreignId("fonction_id")
                ->nullable()
                ->constrained("fonctions", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            ##__L'elu consulaire occupe une fonction dans une entreprise dans une **mandature** donnée
            $table->foreignId("mandate_id")
                ->nullable()
                ->constrained("mandates", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_elected_consulars');
    }
};
