<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Livingroom\Cupboard;
use App\Http\Requests\StoreCupboardRequest;
use App\Http\Requests\UpdateCupboardRequest;

class CupboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cupboard = Cupboard::all()->take(8);

        return view('front.furniture.livingroom.cupboards.index', ['cupboards' => $cupboard]);
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
    public function store(StoreCupboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cupboard $cupboard)
    {
        $cupboardsAll = \App\Models\Furniture\Livingroom\Cupboard::all()->take(6);

        return view('front.furniture.livingroom.cupboards.show')->with([
            'cupboard' => $cupboard,
            'cupboardsAll' => $cupboardsAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cupboard $cupboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCupboardRequest $request, Cupboard $cupboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cupboard $cupboard)
    {
        //
    }
}
