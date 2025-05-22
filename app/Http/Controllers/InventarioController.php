<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Http\Requests\StoreInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Inventario::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventarioRequest $request)
    {
        return response ()->json(Inventario::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        return response()->json($inventario,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventarioRequest $request, Inventario $inventario)
    {
        return response()->json($inventario->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        return response()->json($inventario->delete(),200);
    }
}
