<?php

namespace App\Http\Controllers;

use App\Models\LivingRoom;
use App\Http\Requests\StoreLivingRoomRequest;
use App\Http\Requests\UpdateLivingRoomRequest;

class LivingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $livingRoom = LivingRoom::all()->take(8);

        return view('front.furniture.livingroom.index', ['livingRoom' => $livingRoom]);

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
    public function store(StoreLivingRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LivingRoom $livingRoom)
    {

        $livingRoomAll = \App\Models\LivingRoom::all()->take(6);

        return view('front.furniture.livingroom.show')->with([
            'livingRoom' => $livingRoom,
            'livingRoomAll' => $livingRoomAll
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LivingRoom $livingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivingRoomRequest $request, LivingRoom $livingRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LivingRoom $livingRoom)
    {
        //
    }
}
