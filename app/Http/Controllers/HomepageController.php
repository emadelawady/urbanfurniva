<?php

namespace App\Http\Controllers;

use App\Models\homepage;
use App\Http\Requests\StorehomepageRequest;
use App\Http\Requests\UpdatehomepageRequest;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage.index');
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
    public function store(StorehomepageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(homepage $homepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehomepageRequest $request, homepage $homepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(homepage $homepage)
    {
        //
    }
}
