<?php

namespace App\Http\Controllers;

use App\Models\Tecnicos;
use App\Http\Requests\StoreTecnicosRequest;
use App\Http\Requests\UpdateTecnicosRequest;


class TecnicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Tecnicos::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTecnicosRequest $request)
    {
        return response ()->json(Tecnicos::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnicos $tecnico)
    {
        return response()->json($tecnico,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTecnicosRequest $request, Tecnicos $tecnico)
    {
        return response()->json($tecnico->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnicos $tecnico)
    {
        return response()->json($tecnico->delete(),200);
    }
}
