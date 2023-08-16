<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompanyProfile;

class Login extends Controller
{
    public function Login(Request $request){
       $Login=DB::table("tbl_company_profiles")
       ->where(['email' => $request->email,'password' => $request->password])
       ->get();

       if(count($Login)>0)
       {
            return response()->json([
                'message' => 'Login successful',
                'status' => 'success',
                'data' => $Login
            ]);
        }
        else{
            return response()->json([
                'message' => 'User-Name Password not match.',
                'status' => False,
                
            ]);
        }

    }
}
