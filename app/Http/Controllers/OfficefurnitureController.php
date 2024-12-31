<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Officefurniture;
use App\Http\Requests\StoreOfficefurnitureRequest;
use App\Http\Requests\UpdateOfficefurnitureRequest;

class OfficefurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $officefurnitures = Officefurniture::all()->take(8);

        return view('front.furniture.officefurniture.index', ['officefurnitures' => $officefurnitures]);
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
    public function store(StoreOfficefurnitureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Officefurniture $officefurniture)
    {
        $officefurnitureAll = \App\Models\Furniture\Officefurniture::all()->take(6);

        return view('front.furniture.officefurniture.show')->with([
            'officefurniture' => $officefurniture,
            'officefurnitureAll' => $officefurnitureAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Officefurniture $officefurniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfficefurnitureRequest $request, Officefurniture $officefurniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Officefurniture $officefurniture)
    {
        //
    }
}
