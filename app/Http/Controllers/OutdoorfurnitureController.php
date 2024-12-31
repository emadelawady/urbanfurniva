<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Outdoorfurniture;
use App\Http\Requests\StoreOutdoorfurnitureRequest;
use App\Http\Requests\UpdateOutdoorfurnitureRequest;

class OutdoorfurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outdoorfurnitures = Outdoorfurniture::all()->take(8);

        return view('front.furniture.outdoorfurniture.index', ['outdoorfurnitures' => $outdoorfurnitures]);
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
    public function store(StoreOutdoorfurnitureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Outdoorfurniture $outdoorfurniture)
    {
        $outdoorfurnitureAll = \App\Models\Furniture\Outdoorfurniture::all()->take(6);

        return view('front.furniture.outdoorfurniture.show')->with([
            'outdoorfurniture' => $outdoorfurniture,
            'outdoorfurnitureAll' => $outdoorfurnitureAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outdoorfurniture $outdoorfurniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutdoorfurnitureRequest $request, Outdoorfurniture $outdoorfurniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outdoorfurniture $outdoorfurniture)
    {
        //
    }
}
