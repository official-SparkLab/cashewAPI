<?php

namespace App\Http\Controllers;

use App\Models\addEmployee;
use Illuminate\Http\Request;

class AddEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>addEmployee::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new addEmployee;
        $save->employeeName=$request->employeeName;
        $save->dob=$request->dob;
        $save->address=$request->address;
        $save->contact=$request->contact;
        $save->joinDate=$request->joinDate;
        $save->employeeType=$request->employeeType;
        $save->designation=$request->designation;
        $save->salary=$request->salary;
        $save->bankName=$request->bankName;
        $save->ifsc=$request->ifsc;
        $save->accountNo=$request->accountNo;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>addEmployee::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(addEmployee $addEmployee)
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>addEmployee::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, addEmployee $addEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(addEmployee $addEmployee)
    {
        $addEmployee->delete();
    
        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>addEmployee::get()
        ]);
    }
}
