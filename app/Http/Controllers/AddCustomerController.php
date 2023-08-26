<?php

namespace App\Http\Controllers;

use App\Models\addCustomer;
use Illuminate\Http\Request;

class AddCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true, 
            'data'=>addCustomer::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new addCustomer;
        $save->customerName=$request->customerName;
        $save->address=$request->address;
        $save->cityName=$request->cityName;
        $save->stateName=$request->stateName;
        $save->customerType=$request->customerType;
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
         'data'=>addCustomer::get()
     ]);
     }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $save=addCustomer::where("id",$id)->first();

        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true, 
            'data'=>$save
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=addCustomer::where("id",$id)->first();
            $save->customerName = $request->input('customerName');

            $save->address = $request->input('address');

            $save->cityName = $request->input('cityName');

            $save->stateName = $request->input('stateName');

            $save->customerType = $request->input('customerType');

            $save->contact = $request->input('contact');

            $save->email = $request->input('email');

            $save->bankName = $request->input('bankName');

            $save->ifsc = $request->input('ifsc');

            $save->accountNo = $request->input('accountNo');

            $save->gstNo = $request->input('gstNo');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Customer Updated Successfully',
                'status' => 'success',
                'data' => addCustomer::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(addCustomer $addCustomer)
    {
        $addCustomer->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>addCustomer::get()
        ]);

    }
}
