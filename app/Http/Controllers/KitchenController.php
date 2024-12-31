<?php

namespace App\Http\Controllers;

use App\Models\kitchen;
use App\Http\Requests\StorekitchenRequest;
use App\Http\Requests\UpdatekitchenRequest;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kitchens = kitchen::all()->take(6);

        $kitchens_random_one = kitchen::all()->random(1)->first();

        $kitchens_random = kitchen::all()->random(6);

        // dd($kitchens_random_one->title);


        return view('front.kitchens.index', [
            'kitchens' => $kitchens,
            'kitchens_random' => $kitchens_random,
            'kitchens_random_one' => $kitchens_random_one
        ]);
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
    public function store(StorekitchenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kitchen $kitchen)
    {
        // $kitchen;

        return view('front.kitchens.show')->with(['kitchen' => $kitchen]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kitchen $kitchen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekitchenRequest $request, kitchen $kitchen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kitchen $kitchen)
    {
        //
    }
}
