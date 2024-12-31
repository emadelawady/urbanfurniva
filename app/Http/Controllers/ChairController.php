<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Livingroom\Chair;
use App\Http\Requests\StoreChairRequest;
use App\Http\Requests\UpdateChairRequest;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chairs = Chair::all()->take(8);

        return view('front.furniture.livingroom.chairs.index', ['chairs' => $chairs]);

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
    public function store(StoreChairRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Chair $chair)
    {
        $chairsAll = \App\Models\Furniture\Livingroom\Chair::all()->take(6);

        return view('front.furniture.livingroom.chairs.show')->with([
            'chair' => $chair,
            'chairsAll' => $chairsAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chair $chair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChairRequest $request, Chair $chair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chair $chair)
    {
        //
    }
}
