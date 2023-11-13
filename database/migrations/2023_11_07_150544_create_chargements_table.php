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
        Schema::create('chargements', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE", "id");
            $table->foreignId("product")
                ->nullable()
                ->constrained("products", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE", "id");
            $table->string("qty");
            $table->string("immatriculation");
            $table->text("driver_identification");
            $table->text("destination");
            $table->string("emetteur");

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
        Schema::dropIfExists('chargements');
    }
};
