<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;
use App\Models\Detalle_Entrega;
use App\Models\Inventario;

class ProcesoEntregasController extends Controller
{
    public function registrarEntrega(Request $request)
    {
        // Validaciones
        $request->validate([
            'id_proveedor' => 'required|exists:proveedores,id',
            'fecha' => 'nullable|date',
            'detalles' => 'required|array|min:1',
            'detalles.*.id_pieza' => 'required|exists:inventario,id',
            'detalles.*.cantidad' => 'required|integer|min:1',
            'detalles.*.costo_unitario' => 'required|numeric|min:0',
        ]);

        // Crear entrega (costo_total será actualizado luego)
        $entrega = Entrega::create([
            'id_proveedor' => $request->id_proveedor,
            'fecha' => $request->fecha,
            'costo' => 0,
        ]);

        $total = 0;

        // Recorrer cada detalle
        foreach ($request->detalles as $detalle) {
            // Crear detalle_entrega
            DetalleEntrega::create([
                'id_entrega' => $entrega->id,
                'id_pieza' => $detalle['id_pieza'],
                'cantidad' => $detalle['cantidad'],
                'costo_unitario' => $detalle['costo_unitario'],
            ]);

            // Actualizar inventario sumando la cantidad
            $pieza = Inventario::find($detalle['id_pieza']);
            if ($pieza) {
                $pieza->cantidad += $detalle['cantidad'];
                $pieza->save();
            }

            // Acumular el costo total
            $total += $detalle['cantidad'] * $detalle['costo_unitario'];
        }

        // Actualizar costo total en entrega
        $entrega->costo = $total;
        $entrega->save();

        // Cargar detalles para la respuesta
        $entrega->load('detalles');

        return response()->json([
            'message' => 'Entrega creada correctamente.',
            'entrega' => $entrega
        ], 201);
    }
}

