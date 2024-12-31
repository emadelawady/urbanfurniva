<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Http\Requests\StorefurnitureRequest;
use App\Http\Requests\UpdatefurnitureRequest;
use App\Models\Furniture\Bedroom;
use App\Models\Furniture\Diningroom;
use App\Models\Furniture\Entrywayfurniture;
use App\Models\Furniture\Livingroom\Chair;
use App\Models\Furniture\Officefurniture;
use App\Models\Furniture\Outdoorfurniture;
use App\Models\LivingRoom;
use App\Models\Sofa;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $furnitures = Furniture::all()->take(4);

        $furnitures_random_one = Chair::find(2);

        $furnitures_livingroom = LivingRoom::all()->take(8);


        $furnitures_livingroom_sofa = Sofa::all()->take(8);

        $furnitures_livingroom_chair = Chair::find(1);


        $furnitures_bedroom = Bedroom::all()->take(8);


        $furnitures_diningroom = Diningroom::all()->take(8);


        $furnitures_officefurniture_heads = Officefurniture::all()->take(2);

        $furnitures_officefurniture_rest = Officefurniture::all()->skip(2)->take(4);

        $furnitures_officefurniture = Officefurniture::all()->take(8);


        $furnitures_outdoorfurniture = Outdoorfurniture::all()->take(8);


        $furnitures_entrywayfurniture = Entrywayfurniture::all()->take(8);


        return view('front.furniture.index', [
            'furnitures' => $furnitures,
            'furnitures_livingroom' => $furnitures_livingroom,
            'furnitures_livingroom_sofa' => $furnitures_livingroom_sofa,
            'furnitures_livingroom_chair' => $furnitures_livingroom_chair,
            'furnitures_bedroom' => $furnitures_bedroom,
            'furnitures_diningroom' => $furnitures_diningroom,
            'furnitures_officefurniture_heads' => $furnitures_officefurniture_heads,
            'furnitures_officefurniture_rest' => $furnitures_officefurniture_rest,
            'furnitures_officefurniture' => $furnitures_officefurniture,
            'furnitures_outdoorfurniture' => $furnitures_outdoorfurniture,
            'furnitures_entrywayfurniture' => $furnitures_entrywayfurniture,
            'furnitures_random_one' => $furnitures_random_one
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
    public function store(StorefurnitureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Furniture $furniture)
    {
        return view('front.furniture.show')->with(['furniture' => $furniture]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(furniture $furniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefurnitureRequest $request, furniture $furniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(furniture $furniture)
    {
        //
    }
}
