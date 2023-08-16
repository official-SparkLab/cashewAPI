<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

        $saveCompany=new CompanyProfile();
        $saveCompany->registerNo=$request->registerNo;
        $saveCompany->companyName=$request->companyName;
        $saveCompany->contact=$request->contact;
        $saveCompany->email=$request->email;
        $saveCompany->pincode=$request->pincode;
        $saveCompany->address1=$request->address1;
        $saveCompany->address2=$request->address2;
        $saveCompany->city=$request->city;
        $saveCompany->state=$request->state;
        $saveCompany->gstNo=$request->gstNo;
        $saveCompany->logo=$request->logo;
        $saveCompany->password=$request->password;

        $saveCompany->save();

        return response()->json([
            'message' => 'Company Details Saved.',
            'status' => 'success',
            'data' => CompanyProfile::get()

        ]);






    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyProfile $companyProfile,$registerNo)
    {
        $search = CompanyProfile::where('registerNo', $registerNo)
        ->where('id', $companyProfile->id)
        ->get();

    return response()->json([
        'message' => 'Records fetched successfully',
        'status' => true,
        'data' => $search
    ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyProfile $companyProfile)
    {
        //
    }
}
