<?php

namespace App\Http\Controllers\Procesos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicios;
use App\Models\Clientes;
use App\Models\Tecnicos;
use App\Models\Electrodomesticos;
use Carbon\Carbon;

class ProcesosServiciosController extends Controller
{
    public function crearServicio(Request $request)
    {
        // Validar datos
        $request->validate([
            'id_Cliente' => 'required|exists:clientes,id',
            'id_Electrodomestico' => 'required|exists:electrodomesticos,id',
            'id_Tecnico' => 'required|exists:tecnicos,id',
            'fecha_Reporte' => 'required|date|after_or_equal:today',
            'fecha_Servicio' => 'required|date|after_or_equal:fecha_Reporte',
            'descripcion' => 'required|string|max:1000',
        ]);

        // Verificar existencia de datos relacionados
        $cliente = Clientes::find($request->id_Cliente);
        $electrodomestico = Electrodomesticos::find($request->id_Electrodomestico);
        $tecnico = Tecnicos::find($request->id_Tecnico);

        // Crear servicio
        $servicio = Servicios::create([
            'id_Cliente' => $request->id_Cliente,
            'id_Electrodomestico' => $request->id_Electrodomestico,
            'id_Tecnico' => $request->id_Tecnico,
            'fecha_Reporte' => $request->fecha_Reporte,
            'fecha_Servicio' => $request->fecha_Servicio,
            'descripcion' => $request->descripcion,
        ]);

        // Incrementar contador de servicios del tecnico
        $tecnico->increment('servicios_Asignados');

        return response()->json([
            'mensaje' => 'Servicio registrado correctamente',
            'servicio' => $servicio
        ], 201);
    }
}
