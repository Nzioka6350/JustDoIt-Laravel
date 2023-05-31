<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staff::all();
    }

    
    public function store(StoreStaffRequest $request)
    {
        //
        $staff=Staff::create($request-> validated());
        return response("$staff->Id_No Has been created", status:200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return $staff;
    }


    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $staff->update($request->validated());
        return response("$staff->Id_No is Updated", status:200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return response("$staff->Id_No is deleted",status:200);
    }
}
