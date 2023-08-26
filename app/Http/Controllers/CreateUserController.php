<?php

namespace App\Http\Controllers;

use App\Models\createUser;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>"User Fetched Successfully",
            'status'=>true, 
            'data'=>createUser::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save=new createUser;
        $save->userName=$request->userName;
        $save->gender=$request->gender;
        $save->contactNo=$request->contactNo;
        $save->email=$request->email;
        $save->password=$request->password;

        $save->registerNo=$request->registerNo;
        $save->companyID=$request->companyID;
        $save->userID=$request->userID;
 
        $save->save();
 
        return response()->json([
         'message'=>"User Saved Successfully",
         'status'=>true, 
         'data'=>createUser::get()
     ]);
     }

    /**
     * Display the specified resource.
     */
    public function show(createUser $createUser)
    {
        return response()->json([
            'message'=>"User Fetched Successfully",
            'status'=>true, 
            'data'=>createUser::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            $save=createUser::where("id",$id)->first();
            $save->userName = $request->input('userName');

            $save->gender = $request->input('gender');

            $save->contactNo = $request->input('contactNo');

            $save->email = $request->input('email');

            $save->customerType = $request->input('customerType');

            $save->contact = $request->input('contact');

            $save->email = $request->input('email');

            $save->password = $request->input('password');

            $save->registerNo = $request->input('registerNo');

            $save->companyID = $request->input('companyID');

            $save->userID = $request->input('userID');

            $save->save();
    
            return response()->json([
                'message' => 'User Updated Successfully',
                'status' => 'success',
                'data' => createUser::get()
    
            ]);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(createUser $createUser)
    {
        $createUser->delete();

        return response()->json([
            'message'=>"Record deleted successfully",
            'status'=>true,
            'data'=>createUser::get()
        ]);

    }
}
