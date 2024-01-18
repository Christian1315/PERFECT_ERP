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
        Schema::create('paiement_initiations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("manager")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("proprietor")
                ->nullable()
                ->constrained("proprietors", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("status")
                ->nullable()
                ->constrained("paiement_initiation_statuses", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->text("amount")->nullable();
            $table->text("comments")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement_initiations');
    }
};
