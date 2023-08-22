<?php

namespace App\Http\Controllers;

use App\Models\employeePayment;
use Illuminate\Http\Request;

class EmployeePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>employeePayment::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new employeePayment;
        $save->employeeName=$request->employeeName;
        $save->date=$request->date;
        $save->salaryType=$request->salaryType;
        $save->salaryAmount=$request->salaryAmount;
        $save->deduction=$request->deduction;
        $save->description=$request->description;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;
 
        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>employeePayment::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(employeePayment $employeePayment)
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>employeePayment::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=employeePayment::where("id",$id)->first();
            $save->employeeName = $request->input('employeeName');

            $save->date = $request->input('date');

            $save->salaryType = $request->input('salaryType');

            $save->salaryAmount = $request->input('salaryAmount');

            $save->deduction = $request->input('deduction');

            $save->description = $request->input('description');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Entry Updated Successfully',
                'status' => 'success',
                'data' => employeePayment::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employeePayment $employeePayment)
    {
        $employeePayment->delete();
    
        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>employeePayment::get()
        ]);
    }
}
