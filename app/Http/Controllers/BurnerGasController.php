<?php

namespace App\Http\Controllers;

use App\Models\BurnerGas;
use App\Http\Requests\StoreBurnerGasRequest;
use App\Http\Requests\UpdateBurnerGasRequest;

class BurnerGasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $burnerGas = BurnerGas::all()->take(8);

        return view('front.kitchens.burnergas.index', ['burnerGas' => $burnerGas]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBurnerGasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BurnerGas $burnerGas)
    {
        $burnerGasAll = \App\Models\burnerGas::all()->take(6);


        return view('front.kitchens.burnergas.show')->with([
            'burnerGas' => $burnerGas,
            'burnerGasAll' => $burnerGasAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BurnerGas $burnerGas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBurnerGasRequest $request, BurnerGas $burnerGas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BurnerGas $burnerGas)
    {
        //
    }
}
