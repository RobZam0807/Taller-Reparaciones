<?php

namespace App\Http\Controllers;

use App\Models\TipoElectrodomestico;
use App\Http\Requests\StoreTipoElectrodomesticoRequest;
use App\Http\Requests\UpdateTipoElectrodomesticoRequest;

class TipoElectrodomesticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return response()->json(TipoElectrodomestico::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoElectrodomesticoRequest $request)
    {
        return response ()->json(TipoElectrodomestico::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoElectrodomestico $tipoElectrodomestico)
    {
        return response()->json($tipoElectrodomestico,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoElectrodomesticoRequest $request, TipoElectrodomestico $tipoElectrodomestico)
    {
        return response()->json($tipoElectrodomestico->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoElectrodomestico $tipoElectrodomestico)
    {
        return response()->json($tipoElectrodomestico->delete(),200);
    }
}
