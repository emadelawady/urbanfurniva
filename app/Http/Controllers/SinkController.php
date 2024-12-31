<?php

namespace App\Http\Controllers;

use App\Models\Sink;
use App\Http\Requests\StoreSinkRequest;
use App\Http\Requests\UpdateSinkRequest;

class SinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sinks = Sink::all()->take(8);

        return view('front.kitchens.sinks.index', ['sinks' => $sinks]);
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
    public function store(StoreSinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sink $sink)
    {
        $sinksAll = \App\Models\Sink::all()->take(6);

        return view('front.kitchens.sinks.show')->with([
            'sink' => $sink,
            'sinksAll' => $sinksAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sink $sink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSinkRequest $request, Sink $sink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sink $sink)
    {
        //
    }
}
