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
        Schema::create('consulars_postes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("elected_consular")
                ->nullable()
                ->constrained("elected_consulars", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("poste_id")
                ->nullable()
                ->constrained("postes", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            ###___Le mandat dans lequel l'elu consulaire occupe le poste
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
        Schema::dropIfExists('consulars_mandates');
    }
};
