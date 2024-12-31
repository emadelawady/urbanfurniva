<?php

namespace App\Http\Controllers;

use App\Models\Oven;
use App\Http\Requests\StoreOvenRequest;
use App\Http\Requests\UpdateOvenRequest;

class OvenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ovens = Oven::all()->take(8);

        return view('front.kitchens.ovens.index', ['ovens' => $ovens]);
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
    public function store(StoreOvenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Oven $oven)
    {

        $ovens = \App\Models\Oven::all()->take(6);

        return view('front.kitchens.ovens.show')->with([
            'oven' => $oven,
            'ovens' => $ovens
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oven $oven)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOvenRequest $request, Oven $oven)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oven $oven)
    {
        //
    }
}
