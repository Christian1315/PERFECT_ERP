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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("latitude");
            $table->string("longitude");
            $table->text("comments");

            $table->foreignId("proprietor")
                ->nullable()
                ->constrained("proprietors", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");


            $table->foreignId("type")
                ->nullable()
                ->constrained("house_types", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");


            $table->foreignId("supervisor")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("city")
                ->nullable()
                ->constrained("cities", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("country")
                ->nullable()
                ->constrained("countries", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("departement")
                ->nullable()
                ->constrained("departements", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("quartier")
                ->nullable()
                ->constrained("quarters", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("zone")
                ->nullable()
                ->constrained("zones", "id")
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
        Schema::dropIfExists('houses');
    }
};
