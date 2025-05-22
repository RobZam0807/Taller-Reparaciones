<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use App\Http\Requests\StoreProveedoresRequest;
use App\Http\Requests\UpdateProveedoresRequest;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Proveedores::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response ()->json(Proveedores::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedores $proveedore)
    {
        return response()->json($proveedore,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedores $proveedore)
    {
        return response()->json($proveedore->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedores $proveedore)
    {
        return response()->json($proveedore->delete(),200);
    }
}
