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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_Cliente')->references('id')->on('Clientes');
            $table->foreignId('id_Electrodomestico')->references('id')->on('Electrodomesticos');
            $table->foreignId('id_Tecnico')->references('id')->on('Tecnicos');
            $table->datetime('fecha_Reporte');
            $table->datetime('fecha_Servicio');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
