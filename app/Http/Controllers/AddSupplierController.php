<?php

namespace App\Http\Controllers;

use App\Models\addSupplier;
use Illuminate\Http\Request;

class AddSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true, 
            'data'=>addSupplier::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $save=new addSupplier;
       $save->supplierName=$request->supplierName;
       $save->address=$request->address;
       $save->cityName=$request->cityName;
       $save->stateName=$request->stateName;
       $save->supplierType=$request->supplierType;
       $save->contact=$request->contact;
       $save->email=$request->email;
       $save->bankName=$request->bankName;
       $save->ifsc=$request->ifsc;
       $save->accountNo=$request->accountNo;
       $save->gstNo=$request->gstNo;
       $save->registerNo=$request->registerNo;
       $save->companyID=$request->companyID;
       $save->userID=$request->userID;

       $save->save();

       return response()->json([
        'message'=>"Records Saved Successfully",
        'status'=>true, 
        'data'=>addSupplier::get()
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(addSupplier $addSupplier)
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true, 
            'data'=>addSupplier::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, addSupplier $addSupplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(addSupplier $addSupplier)
    {
        $addSupplier->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>addSupplier::get()
        ]);

    }
}
