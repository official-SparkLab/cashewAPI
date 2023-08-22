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
    public function update(Request $request, $id)
    {
       
            $save=addSupplier::where("id",$id)->first();
            $save->supplierName = $request->input('supplierName');

            $save->address = $request->input('address');

            $save->cityName = $request->input('cityName');

            $save->stateName = $request->input('stateName');

            $save->supplierType = $request->input('supplierType');

            $save->contact = $request->input('contact');

            $save->email = $request->input('email');

            $save->bankName = $request->input('bankName');

            $save->Ifsc = $request->input('Ifsc');

            $save->accountNo = $request->input('accountNo');

            $save->gstNo = $request->input('gstNo');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Suppplier Updated Successfully',
                'status' => 'success',
                'data' => addSupplier::get()
    
            ]);
      
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
