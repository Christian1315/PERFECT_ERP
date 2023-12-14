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
        Schema::create('elected_consulars', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->string("ifu");
            $table->string("npi")->nullable();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("sexe");
            $table->string("photo");
            $table->string("phone");
            $table->string("email");
            // $table->string("validated_date");
            $table->string("birth_date");
            $table->string("place_of_birth");
            $table->string("country_of_birth");
            $table->string("nationnality");

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
        Schema::dropIfExists('elected_consulars');
    }
};
