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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("proprietor")
                ->nullable()
                ->constrained("proprietors", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("locataire")
                ->nullable()
                ->constrained("locataires", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("location")
                ->nullable()
                ->constrained("locations", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("type")
                ->default(1)
                ->constrained("facture_types", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("status")
                ->default(1)
                ->constrained("facture_statuses", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->text("facture")->nullable();
            $table->text("comments")->nullable();
            $table->text("amount");

            $table->text("begin_date")->nullable();
            $table->text("end_date")->nullable();

            $table->boolean("visible")->default(true);
            $table->string("delete_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
