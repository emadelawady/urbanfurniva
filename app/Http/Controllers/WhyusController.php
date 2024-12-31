<?php

namespace App\Http\Controllers;

use App\Models\whyus;
use App\Http\Requests\StorewhyusRequest;
use App\Http\Requests\UpdatewhyusRequest;

class WhyusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.whyus.index');
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
    public function store(StorewhyusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(whyus $whyus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(whyus $whyus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewhyusRequest $request, whyus $whyus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(whyus $whyus)
    {
        //
    }
}
