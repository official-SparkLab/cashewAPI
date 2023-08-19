<?php

namespace App\Http\Controllers;

use App\Models\employeeAdvancePayment;
use Illuminate\Http\Request;

class EmployeeAdvancePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>employeeAdvancePayment::get()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new employeeAdvancePayment;
        $save->employeeName=$request->employeeName;
        $save->date=$request->date;
        $save->advanceAmount=$request->advanceAmount;
        $save->paymentType=$request->paymentType;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;
 
        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>employeeAdvancePayment::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(employeeAdvancePayment $employeeAdvancePayment)
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>employeeAdvancePayment::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employeeAdvancePayment $employeeAdvancePayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employeeAdvancePayment $employeeAdvancePayment)
    {
        $employeeAdvancePayment->delete();
    
        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>employeeAdvancePayment::get()
        ]);
    }
}
