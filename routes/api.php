<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\Login;
use App\Http\Controllers\DailyBookController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Company Details API Documentation
Route::post('/company',[CompanyProfileController::class,'store']);
Route::GET('/searchCompany/{companyProfile}/{registerNo}',[CompanyProfileController::class,'show']);

//Login API
Route::post('/Login',[Login::class,'Login']);


//DailyBook API
Route::post('/dailyBook',[DailyBookController::class,'store']);
Route::GET('/getDailyBook',[DailyBookController::class,'index']);
Route::GET('/getDailyBook/{dailyBook}',[DailyBookController::class,'show']);
Route::DELETE('/deleteDailyBook/{dailyBook}',[DailyBookController::class,'destroy']);


