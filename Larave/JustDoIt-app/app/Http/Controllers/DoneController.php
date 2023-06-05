<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoneRequest;
use App\Http\Requests\UpdateDoneRequest;
use App\Models\Done;

class DoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Done::all();
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoneRequest $request)
    {
        //
        $done=Done::create($request->validated());
        return response("$done->Description is created", status:200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Done $done)
    {
        //
        return $done;
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoneRequest $request, Done $done)
    {
        //
        $done->update($request->validated());
        return response("$done->Description is updated",status:200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Done $done)
    {
        //
        $done->delete();
        return response("$done->Description is deleted", status:200);
    }
}
