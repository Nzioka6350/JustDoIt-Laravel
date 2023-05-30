<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhonesRequest;
use App\Http\Requests\UpdatePhonesRequest;
use App\Models\Phones;
use Illuminate\Http\Request;

class PhonesController extends Controller
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
    public function create(Request $request)
    {
        //
        $phones=new Phones();

         $phones->Name = $request->input('Name');
         $phones ->Description = $request->input('Description');
         $phones ->Employee = $request ->input('Employee');

        $phones->save();
        return response()->json($phones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhonesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Phones $phones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phones $phones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhonesRequest $request, Phones $phones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phones $phones)
    {
        //
    }
}
