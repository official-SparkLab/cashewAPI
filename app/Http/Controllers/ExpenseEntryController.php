<?php

namespace App\Http\Controllers;

use App\Models\expenseEntry;
use Illuminate\Http\Request;

class ExpenseEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>expenseEntry::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new expenseEntry;
        $save->expenseName=$request->expenseName;
        $save->expenseDetails=$request->expenseDetails;
        $save->date=$request->date;
        $save->mrp=$request->mrp;
        $save->gstNo=$request->gstNo;
        $save->totalAmount=$request->totalAmount;
        $save->paidStatus=$request->paidStatus;
        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;

        $save->save();

        return response()->json([
            'message'=>"Records Saved Successfully",
            'status'=>true,
            'data'=>expenseEntry::get()
        ]);



    }

    /**
     * Display the specified resource.
     */
    public function show(expenseEntry $expenseEntry)
    {
        return response()->json([
            'message'=>"Records Fetched Successfully",
            'status'=>true,
            'data'=>expenseEntry::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, expenseEntry $expenseEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(expenseEntry $expenseEntry)
    {
        $expenseEntry->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>expenseEntry::get()
        ]);
    }
}
