<?php

namespace App\Http\Controllers;

use App\Models\GradeDetails;
use Illuminate\Http\Request;

class GradeDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>GradeDetails::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new GradeDetails;
        $save->gradeName=$request->gradeName;
        $save->description=$request->description;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>GradeDetails::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(GradeDetails $gradeDetails)
    {
        return response()->json([
            'message'=>"Data Fetched successfully",
            'status'=>true,
            'data'=>$GradeDetails
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=GradeDetails::where("id",$id)->first();
            $save->gradeName = $request->input('gradeName');

            $save->description = $request->input('description');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Record Updated Successfully',
                'status' => 'success',
                'data' => GradeDetails::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GradeDetails $gradeDetails)
    {
        $gradeDetails->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>GradeDetails::get()
        ]);
    }
}
