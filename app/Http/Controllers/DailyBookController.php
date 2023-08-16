<?php

namespace App\Http\Controllers;

use App\Models\DailyBook;
use Illuminate\Http\Request;

class DailyBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Data Fetched Successfully",
            'status'=>true,
            'data'=>DailyBook::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $save=new DailyBook;
        $save->entryName=$request->entryName;
        $save->date=$request->date;
        $save->debit=$request->debit;
        $save->credit=$request->credit;
        $save->paidBy=$request->paidBy;
        $save->note=$request->note;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>DailyBook::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(DailyBook $dailyBook)
    {
        return response()->json([
            'message'=>"Data Fetched successfully",
            'status'=>true,
            'data'=>$dailyBook
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DailyBook $dailyBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailyBook $dailyBook)
    {
        $dailyBook->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>DailyBook::get()
        ]);
    }
}
