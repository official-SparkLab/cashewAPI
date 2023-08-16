<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\Login;
use App\Http\Controllers\DailyBookController;
use App\Http\Controllers\AddGstController;
use App\Http\Controllers\GradeDetailsController;
use App\Http\Controllers\GoodsRateController;
use App\Http\Controllers\ExpenseEntryController;
use App\Http\Controllers\CityMasterController;
use App\Http\Controllers\StateMasterController;






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



//GST Master API
Route::post('/addGst',[AddGstController::class,'store']);
Route::GET('/getGstList',[AddGstController::class,'index']);
Route::GET('/getSingleGst/{add_gst}',[AddGstController::class,'show']);
Route::DELETE('/deleteGst/{add_gst}',[AddGstController::class,'destroy']);



//Grade Details API
Route::post('/gradeDetails',[GradeDetailsController::class,'store']);
Route::GET('/getGradeDetails',[GradeDetailsController::class,'index']);
Route::GET('/getGradeDetails/{GradeDetails}',[GradeDetailsController::class,'show']);
Route::DELETE('/deleteGradeDetails/{GradeDetails}',[GradeDetailsController::class,'destroy']);



//Goods Rate API
Route::post('/goodsRate',[GoodsRateController::class,'store']);
Route::GET('/getGoodsRate',[GoodsRateController::class,'index']);
Route::GET('/getGoodsRate/{GoodsRate}',[GoodsRateController::class,'show']);
Route::DELETE('/deleteGoodsRate/{GoodsRate}',[GoodsRateController::class,'destroy']);



//Expense Master API
Route::post('/expenseEntry',[ExpenseEntryController::class,'store']);
Route::GET('/getExpenseList',[ExpenseEntryController::class,'index']);
Route::GET('/getExpenseList/{expenseEntry}',[ExpenseEntryController::class,'show']);
Route::DELETE('/deleteExpenseEntry/{expenseEntry}',[ExpenseEntryController::class,'destroy']);



//City Master API
Route::post('/addCity',[CityMasterController::class,'store']);
Route::GET('/getCityList',[CityMasterController::class,'index']);
Route::GET('/getCityList/{cityMaster}',[CityMasterController::class,'show']);
Route::DELETE('/deleteCity/{cityMaster}',[CityMasterController::class,'destroy']);



//State Master API
Route::post('/addState',[StateMasterController::class,'store']);
Route::GET('/getStateList',[StateMasterController::class,'index']);
Route::GET('/getStateList/{stateMaster}',[StateMasterController::class,'show']);
Route::DELETE('/deleteState/{stateMaster}',[StateMasterController::class,'destroy']);

