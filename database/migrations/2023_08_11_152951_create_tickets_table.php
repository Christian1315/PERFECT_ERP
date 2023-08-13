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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->integer("priority");
            $table->text("tags");
            $table->foreignId("type")
                ->nullable()
                ->constrained("ticket_types", "id")
                ->nullable()
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->foreignId("status")
                ->nullable()
                ->constrained("ticket_statuses", "id")
                ->nullable()
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->foreignId("organisation")
                ->nullable()
                ->constrained("organisations", "id")
                ->nullable()
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->foreignId("member")
                ->nullable()
                ->constrained("members", "id")
                ->nullable()
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->foreignId("owner")
                ->nullable()
                ->constrained("users", "id")
                ->nullable()
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
        Schema::dropIfExists('tickets');
    }
};
