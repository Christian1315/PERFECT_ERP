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
        Schema::create('rooms', function (Blueprint $table) {
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

            $table->foreignId("nature")
                ->nullable()
                ->constrained("room_natures", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
                
            $table->foreignId("type")
                ->nullable()
                ->constrained("room_types", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->text("loyer")->nullable();
            $table->text("number");
            $table->text("comments");


            $table->boolean("security")->default(false);
            $table->boolean("rubbish")->default(false);
            $table->boolean("vidange")->default(false);
            $table->boolean("cleaning")->default(false);

            $table->boolean("water_counter")->default(false);
            $table->boolean("water_discounter")->default(false);
            $table->boolean("electric_counter")->default(false);
            $table->boolean("electric_discounter")->default(false);

            $table->text("water_counter_text")->nullable();
            $table->text("water_discounter_text")->nullable();

            $table->boolean("home_banner")->nullable();
            $table->text("principal_img")->nullable();

            $table->boolean("publish")->default(true);

            $table->boolean("visible")->default(true);
            $table->text("delete_at")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
