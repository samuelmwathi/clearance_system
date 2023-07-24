<?php

use App\Http\Controllers\adminclearance;
use App\Http\Controllers\ClearanceController;
use App\Http\Controllers\missingMark;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;

use App\Http\Controllers\Units;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
return view("layouts.app");
});

Auth::routes();






Route::prefix("admin")->middleware(['auth','role'])->group(function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/UnitController',[UnitController::class,'index'] )->name("unit_index");
Route::get('/UnitController/create',[UnitController::class,'create'] )->name("unit_create");
Route::post('/UnitController/store',[UnitController::class,'store'] )->name("unit_store");
Route::get('/UnitController/update/{id}',[UnitController::class,'update'] )->name("unit_update");
Route::get('/UnitController/delete/{id}',[UnitController::class,'destroy'] )->name("unit_delete");

Route::get('/student',[StudentController::class,'index'] )->name("student_index");
Route::get('/student/create',[StudentController::class,'create'] )->name("student_create");
Route::post('/student/store',[StudentController::class,'store'] )->name("Student_store");
Route::get('/student/update/{id}',[StudentController::class,'update'] )->name("student_update");
Route::get('/student/delete/{id}',[StudentController::class,'destroy'] )->name("student_delete");


Route::get('/staff',[StaffController::class,'index'] )->name("staff_index");
Route::get('/staff/create',[StaffController::class,'create'] )->name("staff_create");
Route::post('/staff/store',[StaffController::class,'store'] )->name("staff_store");
Route::get('/staff/update/{id}',[StaffController::class,'update'] )->name("staff_update");
Route::get('/staff/delete/{id}',[StaffController::class,'destroy'] )->name("staff_delete");



});


Route::middleware(['auth','role'])->group(function(){

Route::get('/Clearance',[ClearanceController::class,'index'] )->name("clearance_index"); 

Route::get('/Clearance/status',[ClearanceController::class,'clearance_status'] )->name("clearance_status");


Route::get('/missingMark',[missingMark::class,'index'] )->name("missing_mark_index");
Route::get('/missingMark/create',[missingMark::class,'create'] )->name("missing_mark_status");
Route::post('/missingMark/store',[missingMark::class,'store'] )->name("missing_mark_store");

Route::get('/admin/units',[Units::class,'index'] )->name("all_units");
Route::get('/admin/missing_mark_request',[Units::class,'missing_mark_request'] )->name("missing_mark_request");
Route::get('/admin/clearance',[adminclearance::class,'index'] )->name("admin_clearance_index");

});

Route::middleware(['auth',"role"])->group(function(){

    Route::get('/Clearance',[ClearanceController::class,'index'] )->name("clearance_index"); 
    
    Route::get('/Clearance/status',[ClearanceController::class,'clearance_status'] )->name("clearance_status");
    
    
    Route::get('/missingMark',[missingMark::class,'index'] )->name("missing_mark_index");
    Route::get('/missingMark/create',[missingMark::class,'create'] )->name("missing_mark_status");
    Route::post('/missingMark/store',[missingMark::class,'store'] )->name("missing_mark_store");
    
    Route::get('/admin/units',[Units::class,'index'] )->name("all_units");
    Route::get('/admin/missing_mark_request',[Units::class,'missing_mark_request'] )->name("missing_mark_request");
    Route::get('/admin/clearance',[adminclearance::class,'index'] )->name("admin_clearance_index");
    
    });













