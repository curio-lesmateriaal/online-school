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
        Schema::create('lokalen', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('floor')->nullable();
            $table->integer('capacity');
            $table->boolean('has_screen')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokalen');
    }
};
