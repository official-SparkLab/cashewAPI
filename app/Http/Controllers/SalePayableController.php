<?php

namespace App\Http\Controllers;

use App\Models\salePayable;
use Illuminate\Http\Request;

class SalePayableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>salePayable::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new salePayable;
        $save->date=$request->date;
        $save->customerName=$request->customerName;
        $save->contactNo=$request->contactNo;
        $save->address=$request->address;
        $save->pendingAmount=$request->pendingAmount;
        $save->paidAmount=$request->paidAmount;
        $save->availableBalance=$request->availableBalance;
        $save->paymentMode=$request->paymentMode;
        $save->trxNo=$request->trxNo;

        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>salePayable::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(salePayable $salePayable)
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>salePayable::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=salePayable::where("id",$id)->first();
            $save->date = $request->input('date');

            $save->customerName = $request->input('customerName');

            $save->contactNo = $request->input('contactNo');

            $save->address = $request->input('address');

            $save->pendingAmount = $request->input('pendingAmount');

            $save->paidAmount = $request->input('paidAmount');

            $save->availableBalance = $request->input('availableBalance');
            
            $save->paymentMode = $request->input('paymentMode');

            $save->trxNo = $request->input('trxNo');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Entry Updated Successfully',
                'status' => 'success',
                'data' => salePayable::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(salePayable $salePayable)
    {
        $salePayable->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>salePayable::get()
        ]);
    }
}
