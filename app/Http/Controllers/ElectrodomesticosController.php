<?php

namespace App\Http\Controllers;

use App\Models\Electrodomesticos;
use App\Http\Requests\StoreElectrodomesticosRequest;
use App\Http\Requests\UpdateElectrodomesticosRequest;
use Illuminate\Http\Request;

class ElectrodomesticosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Electrodomesticos::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response ()->json(Electrodomesticos::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Electrodomesticos $electrodomestico)
    {
        return response()->json($electrodomestico,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Electrodomesticos $electrodomestico)
    {
        return response()->json($electrodomestico->update($request->all()),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Electrodomesticos $electrodomestico)
    {
        return response()->json($electrodomestico->delete(),200);
    }
}
