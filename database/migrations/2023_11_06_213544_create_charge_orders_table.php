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
        Schema::create('charge_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE", "id");

            $table->foreignId("logistique")
                ->nullable()
                ->constrained("logistiques", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE", "id");
            $table->text("transportor");
            $table->text("driver");
            $table->text("driver_permit_ref");
            $table->text("camion_number");
            $table->text("product_volume");
            $table->text("driver_phone");
            $table->boolean('visible')->default(true);
            $table->text('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charge_orders');
    }
};
