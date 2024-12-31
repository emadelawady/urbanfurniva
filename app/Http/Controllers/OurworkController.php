<?php

namespace App\Http\Controllers;

use App\Models\ourwork;
use App\Http\Requests\StoreourworkRequest;
use App\Http\Requests\UpdateourworkRequest;

class OurworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.ourworks.index');
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
    public function store(StoreourworkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ourwork $ourwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ourwork $ourwork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateourworkRequest $request, ourwork $ourwork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ourwork $ourwork)
    {
        //
    }
}
