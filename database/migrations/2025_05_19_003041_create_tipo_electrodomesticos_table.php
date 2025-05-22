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
        Schema::create('tipo_electrodomesticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_Electrodomestico')->references('id')->on('Electrodomesticos');
            $table->string('modelo',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_electrodomesticos');
    }
};
