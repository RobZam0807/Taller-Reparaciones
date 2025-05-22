<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Http\Requests\StoreServiciosRequest;
use App\Http\Requests\UpdateServiciosRequest;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Servicios::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiciosRequest $request)
    {
        return response ()->json(Servicios::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicios $servicio)
    {
        return response()->json($servicio,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiciosRequest $request, Servicios $servicio)
    {
        return response()->json($servicio->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicios $servicio)
    {
        return response()->json($servicio->delete(),200);
    }
}