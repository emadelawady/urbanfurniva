<?php

namespace App\Http\Controllers;

use App\Models\DoorHandle;
use App\Http\Requests\StoreDoorHandleRequest;
use App\Http\Requests\UpdateDoorHandleRequest;

class DoorHandleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doorHandle = DoorHandle::all()->take(8);

        return view('front.kitchens.doorhandle.index', ['doorHandle' => $doorHandle]);
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
    public function store(StoreDoorHandleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DoorHandle $doorHandle)
    {
        $doorHandleAll = \App\Models\DoorHandle::all()->take(6);


        return view('front.kitchens.doorhandle.show')->with([
            'doorHandle' => $doorHandle,
            'doorHandleAll' => $doorHandleAll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DoorHandle $doorHandle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoorHandleRequest $request, DoorHandle $doorHandle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoorHandle $doorHandle)
    {
        //
    }
}
