<?php

namespace App\Http\Controllers;

use App\Models\Furniture\Diningroom;
use App\Http\Requests\StoreDiningroomRequest;
use App\Http\Requests\UpdateDiningroomRequest;

class DiningroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diningrooms = Diningroom::all()->take(8);

        return view('front.furniture.diningroom.index', ['diningrooms' => $diningrooms]);
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
    public function store(StoreDiningroomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diningroom $diningroom)
    {

        $diningroomAll = \App\Models\Furniture\Diningroom::all()->take(6);

        return view('front.furniture.diningroom.show')->with([
            'diningroom' => $diningroom,
            'diningroomAll' => $diningroomAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diningroom $diningroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiningroomRequest $request, Diningroom $diningroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diningroom $diningroom)
    {
        //
    }
}
