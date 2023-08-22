<?php

namespace App\Http\Controllers;

use App\Models\GoodsRate;
use Illuminate\Http\Request;

class GoodsRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>GoodsRate::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new GoodsRate;
        $save->goodsName=$request->goodsName;
        $save->hsn=$request->hsn;
        $save->rate=$request->rate;
        $save->description=$request->description;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>GoodsRate::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(GoodsRate $goodsRate)
    {
        return response()->json([
            'message'=>"Data Fetched successfully",
            'status'=>true,
            'data'=>$GoodsRate
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=GoodsRate::where("id",$id)->first();
            $save->goodsName = $request->input('goodsName');

            $save->hsn = $request->input('hsn');

            $save->rate = $request->input('rate');

            $save->description = $request->input('description');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'Record Updated Successfully',
                'status' => 'success',
                'data' => GoodsRate::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GoodsRate $goodsRate)
    {
        $goodsRate->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>GoodsRate::get()
        ]);
    }
}
