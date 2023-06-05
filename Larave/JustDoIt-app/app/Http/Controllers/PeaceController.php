<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeaceRequest;
use App\Http\Requests\UpdatePeaceRequest;
use App\Models\Peace;

class PeaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePeaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peace $peace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peace $peace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeaceRequest $request, Peace $peace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peace $peace)
    {
        //
    }
}
