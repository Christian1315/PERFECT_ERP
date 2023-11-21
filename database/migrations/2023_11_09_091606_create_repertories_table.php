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
        Schema::create('repertories', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("ministry");
            $table->string("denomination");
            $table->string("residence");
            $table->string("commune");
            $table->string("contact");
            $table->string("qr_code")->nullable();
            $table->text("badge")->nullable();
            $table->boolean('present')->default(false);
            $table->string("invited_by")->nullable();
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
        Schema::dropIfExists('repertories');
    }
};
