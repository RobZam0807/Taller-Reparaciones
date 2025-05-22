<?php

namespace App\Http\Controllers;

use App\Models\Catalogo_Servicio;
use App\Http\Requests\StoreCatalogo_ServicioRequest;
use App\Http\Requests\UpdateCatalogo_ServicioRequest;

class CatalogoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Catalogo_Servicio::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatalogo_ServicioRequest $request)
    {
        return response ()->json(Catalogo_Servicio::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalogo_Servicio $catalogo_Servicio)
    {
        return response()->json($catalogo_Servicio,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatalogo_ServicioRequest $request, Catalogo_Servicio $catalogo_Servicio)
    {
        return response()->json($catalogo_Servicio->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catalogo_Servicio $catalogo_Servicio)
    {
        return response()->json($catalogo_Servicio->delete(),200);
    }
}
