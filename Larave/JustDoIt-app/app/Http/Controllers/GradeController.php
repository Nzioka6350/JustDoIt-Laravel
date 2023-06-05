<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Grade::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGradeRequest $request)
    {
        //
        $grade=Grade::create($request->validated());
        return response("$grade->name is created", status:200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        return $grade;
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        $grade->update($request->validated());
        return response("$grade->name has been updated",status:200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        //
        $grade->delete();
        return response("$grade->name has been deleted",status:200);
    }
}
