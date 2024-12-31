<?php

namespace App\Http\Controllers;

use App\Models\Troll;
use App\Http\Requests\StoreTrollRequest;
use App\Http\Requests\UpdateTrollRequest;

class TrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $trolls = Troll::all()->take(8);

        return view('front.kitchens.trolls.index', ['trolls' => $trolls]);

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
    public function store(StoreTrollRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Troll $troll)
    {
        $trollsAll = \App\Models\Troll::all()->take(6);


        return view('front.kitchens.trolls.show')->with([
            'troll' => $troll,
            'trollsAll' => $trollsAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Troll $troll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrollRequest $request, Troll $troll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Troll $troll)
    {
        //
    }
}
