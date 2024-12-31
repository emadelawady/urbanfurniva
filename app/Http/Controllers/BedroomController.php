<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Bedroom;
use App\Http\Requests\StoreBedroomRequest;
use App\Http\Requests\UpdateBedroomRequest;

class BedroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bedrooms = Bedroom::all()->take(8);

        return view('front.furniture.bedroom.index', ['bedrooms' => $bedrooms]);
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
    public function store(StoreBedroomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bedroom $bedroom)
    {

        $bedroomAll = \App\Models\Furniture\Bedroom::all()->take(6);

        return view('front.furniture.bedroom.show')->with([
            'bedroom' => $bedroom,
            'bedroomAll' => $bedroomAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bedroom $bedroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBedroomRequest $request, Bedroom $bedroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bedroom $bedroom)
    {
        //
    }
}
