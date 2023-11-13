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
        Schema::create('logistiques', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('description')->nullable();
            $table->foreignId("as_user")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onUpdate("CASCADE");
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->onUpdate("CASCADE")
                ->onUpdate("CASCADE");
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
        Schema::dropIfExists('logistiques');
    }
};
