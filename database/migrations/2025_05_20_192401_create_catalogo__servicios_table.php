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
        Schema::create('catalogo__servicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_Electrodomestico')->references('id')->on('tipo_electrodomesticos');
            $table->string('tipo_Servicio');
            $table->float('costo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo__servicios');
    }
};
