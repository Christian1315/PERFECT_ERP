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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("client")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("module")
                ->nullable()
                ->constrained("paiement_modules", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("status")
                ->nullable()
                ->constrained("paiement_statuses", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("type")
                ->nullable()
                ->constrained("paiement_types", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->string("amount");
            $table->text("facture")->nullable();

            $table->string("reference");
            $table->string("phone")->nullable();
            $table->text("comments");

            $table->string("start_date")->nullable();
            $table->string("end_date")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payements');
    }
};
