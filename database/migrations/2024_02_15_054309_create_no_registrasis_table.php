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
        Schema::create('no_registrasis', function (Blueprint $table) {
            $table->id();
            $table->boolean('statusenabled');
            $table->foreignId('units_id')->constrained('units')->cascadeOnDelete();
            $table->foreignId('codes_id')->constrained('codes')->cascadeOnDelete();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('no_registrasis');
    }
};
