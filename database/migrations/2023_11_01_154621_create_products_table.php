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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text("img")->nullable();
            $table->string("name");
            $table->longText("description");
            $table->string("sale_price");
            $table->string("sale_tax");
            $table->string("price");
            $table->string("inner_reference")->nullable();
            $table->string("bar_code")->nullable();

            $table->boolean("can_be_sale")->default(true);
            $table->boolean("can_be_buy")->default(true);

            $table->foreignId("type")
                ->nullable()
                ->constrained('product_types', 'id')
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("category")
                ->nullable()
                ->constrained('product_categories', 'id')
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->foreignId("owner")
                ->nullable()
                ->constrained('users', 'id')
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");

            $table->boolean("supplied")->default(false);

            $table->string("delete_at")->nullable();
            $table->boolean("visible")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_products');
    }
};
