<?php

namespace App\Http\Controllers;

use App\Models\add_gst;
use Illuminate\Http\Request;

class AddGstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>add_gst::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $save=new add_gst;
        $save->cgst=$request->cgst;
        $save->sgst=$request->sgst;
        $save->igst=$request->igst;
        $save->date=$request->date;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>add_gst::get()
        ]);



    }
    /**
     * Display the specified resource.
     */
    public function show(add_gst $add_gst)
    {
        return response()->json([
            'message'=>"Data Fetched successfully",
            'status'=>true,
            'data'=>$add_gst
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, add_gst $add_gst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(add_gst $add_gst)
    {
        $add_gst->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>add_gst::get()
        ]);
    }
}
