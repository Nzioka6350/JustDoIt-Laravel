<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiRequest;
use App\Http\Requests\UpdateHiRequest;
use App\Models\Hi;

class HiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Hi::all();
    }

      /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHiRequest $request)
    {
        //
        $hi=Hi::create($request->validated());
        return response("$hi->greet $hi->name You are added",status:200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hi $hi)
    {
        //
        return $hi;
    }

 
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHiRequest $request, Hi $hi)
    {
        //
        $hi->update($request->validated());
        return response("$hi->greet $hi->name your details are updated",status:200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hi $hi)
    {
        //
        $hi->delete();
        return response("$hi->greet $hi->name your details are deleted",status:200);
    }
}
