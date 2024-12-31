<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Entrywayfurniture;
use App\Http\Requests\StoreEntrywayfurnitureRequest;
use App\Http\Requests\UpdateEntrywayfurnitureRequest;

class EntrywayfurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrywayfurnitures = Entrywayfurniture::all()->take(8);

        return view('front.furniture.entrywayfurniture.index', ['entrywayfurnitures' => $entrywayfurnitures]);
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
    public function store(StoreEntrywayfurnitureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrywayfurniture $entrywayfurniture)
    {
        $entrywayfurnitureAll = \App\Models\Furniture\Entrywayfurniture::all()->take(6);

        return view('front.furniture.entrywayfurniture.show')->with([
            'entrywayfurniture' => $entrywayfurniture,
            'entrywayfurnituresAll' => $entrywayfurnitureAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrywayfurniture $entrywayfurniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrywayfurnitureRequest $request, Entrywayfurniture $entrywayfurniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrywayfurniture $entrywayfurniture)
    {
        //
    }
}
