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
        Schema::create('detalle_entregas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_entrega')->references('id')->on('entregas');
            $table->foreignId('id_pieza')->references('id')->on('inventario');
            $table->integer('cantidad');
            $table->decimal('costo_unitario', 10, 2);
            $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__entregas');
    }
};
