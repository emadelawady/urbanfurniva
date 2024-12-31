<?php

namespace App\Http\Controllers;

use App\Models\Sofa;
use App\Http\Requests\StoreSofaRequest;
use App\Http\Requests\UpdateSofaRequest;

class SofaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sofas = Sofa::all()->take(8);

        return view('front.furniture.livingroom.sofas.index', ['sofas' => $sofas]);
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
    public function store(StoreSofaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sofa $sofa)
    {
        $sofasAll = \App\Models\Sofa::all()->take(6);

        return view('front.furniture.livingroom.sofas.show')->with([
            'sofa' => $sofa,
            'sofasAll' => $sofasAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sofa $sofa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSofaRequest $request, Sofa $sofa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sofa $sofa)
    {
        //
    }
}
