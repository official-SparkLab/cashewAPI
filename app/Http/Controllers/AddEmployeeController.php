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
    public function update(Request $request, $id)
    {
       
            $save=addEmployee::where("id",$id)->first();

            $save->employeeName = $request->input('employeeName');

            $save->dob = $request->input('dob');

            $save->address = $request->input('address');

            $save->contact = $request->input('contact');

            $save->joinDate = $request->input('joinDate');

            $save->employeeType = $request->input('employeeType');

            $save->designation = $request->input('designation');

            $save->salary = $request->input('salary');

            $save->bankName = $request->input('bankName');

            $save->ifsc = $request->input('ifsc');

            $save->accountNo = $request->input('accountNo');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Employee Updated Successfully',
                'status' => 'success',
                'data' => addEmployee::get()
    
            ]);
      
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
