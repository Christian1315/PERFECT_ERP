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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("house")
                ->nullable()
                ->constrained("houses", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("room")
                ->nullable()
                ->constrained("rooms", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("locataire")
                ->nullable()
                ->constrained("locataires", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("type")
                ->nullable()
                ->constrained("location_types", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->text("caution_bordereau");
            $table->string("loyer");
            $table->string("water_counter");
            $table->string("prestation");
            $table->string("numero_contrat");

            $table->text("comments");
            $table->text("img_contrat");
            $table->text("caution_water");
            $table->text("echeance_date");
            $table->text("latest_loyer_date");
            $table->text("electric_counter");
            $table->text("img_prestation");
            $table->text("caution_electric");
            $table->text("integration_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
