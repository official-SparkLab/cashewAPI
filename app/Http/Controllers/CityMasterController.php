<?php

namespace App\Http\Controllers;

use App\Models\cityMaster;
use Illuminate\Http\Request;

class CityMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>cityMaster::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.   
     */
    public function store(Request $request)
    {
        $save=new cityMaster;
        $save->stateName=$request->stateName;
        $save->cityName=$request->cityName;
        $save->description=$request->description;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>cityMaster::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(cityMaster $cityMaster)
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>cityMaster::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=cityMaster::where("id",$id)->first();
            $save->stateName = $request->input('stateName');

            $save->cityName = $request->input('cityName');

            $save->description = $request->input('description');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'City Updated Successfully',
                'status' => 'success',
                'data' => cityMaster::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cityMaster $cityMaster)
    {
        {
            $cityMaster->delete();
    
            return response()->json([
                'message'=>"Record deleted successfully",
                'status'=>true,
                'data'=>cityMaster::get()
            ]);
        }
    }
}
