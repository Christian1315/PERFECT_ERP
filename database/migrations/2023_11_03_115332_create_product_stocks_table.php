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
        Schema::create('product_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product")
                ->nullable()
                ->constrained("products", 'id')
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->integer("quantity");
            $table->text("comments");
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", 'id')
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("manager")
                ->nullable()
                ->constrained("users", 'id')
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->string("update_at")->nullable();
            $table->boolean("visible")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stocks');
    }
};
