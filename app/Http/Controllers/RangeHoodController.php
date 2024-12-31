<?php

namespace App\Http\Controllers;

use App\Models\RangeHood;
use App\Http\Requests\StoreRangeHoodRequest;
use App\Http\Requests\UpdateRangeHoodRequest;

class RangeHoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rangeHood = RangeHood::all()->take(8);

        return view('front.kitchens.rangehood.index', ['rangeHood' => $rangeHood]);

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
    public function store(StoreRangeHoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RangeHood $rangeHood)
    {

        // dd($rangeHood);
        $rangeHoodAll = \App\Models\RangeHood::all()->take(6);


        return view('front.kitchens.rangehood.show')->with([
            'rangeHood' => $rangeHood,
            'rangeHoodAll' => $rangeHoodAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RangeHood $rangeHood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRangeHoodRequest $request, RangeHood $rangeHood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RangeHood $rangeHood)
    {
        //
    }
}
