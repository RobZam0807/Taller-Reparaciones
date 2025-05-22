<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ElectrodomesticosController;
use App\Http\Controllers\TecnicosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TipoElectrodomesticoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\Procesos\ProcesosServiciosController;
use App\Http\Controllers\Procesos\ProcesoEntregasController;

Route::post('/procesos/registrarEntrega', [ProcesoEntregasController::class, 'registrarEntrega']);

Route::post('/procesos/crearServicio', [ProcesosServiciosController::class, 'crearServicio']);

Route::resource("clientes", ClientesController::class);

Route::resource("electrodomesticos", ElectrodomesticosController::class);

Route::resource("tecnicos", TecnicosController::class);

Route::resource("proveedores", ProveedoresController::class);

Route::resource("servicios", ServiciosController::class);

Route::resource("tipoElectrodomestico", TipoElectrodomesticoController::class);

Route::resource("inventario", InventarioController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
