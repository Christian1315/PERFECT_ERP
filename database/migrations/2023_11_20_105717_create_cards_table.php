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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId("consular")
                ->nullable()
                ->constrained('consulars_postes', 'id')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId("mandate")
                ->nullable()
                ->constrained('mandates', 'id')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId("company")
                ->nullable()
                ->constrained('companies', 'id')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->text("card_img")->nullable();
            $table->text("reference")->nullable();

            $table->text("qr_code")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
