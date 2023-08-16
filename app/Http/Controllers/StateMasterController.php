<?php

namespace App\Http\Controllers;

use App\Models\stateMaster;
use Illuminate\Http\Request;

class StateMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>stateMaster::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new stateMaster;
        $save->stateName=$request->stateName;
        $save->description=$request->description;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>stateMaster::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(stateMaster $stateMaster)
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>stateMaster::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stateMaster $stateMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stateMaster $stateMaster)
    {
        $stateMaster->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>stateMaster::get()
        ]);
    }
}
