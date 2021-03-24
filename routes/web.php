<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\ClientvisitController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\StatusController;
use App\Models\employe;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('all_auth/login');
});

Auth::routes();

// auth creatr
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//  client list

Route::get('Client-list',[ClientController::class,'index'])->name('clientlist');
Route::post('Add-client',[ClientController::class,'store'])->name('addclient');
Route::get('clientdelete/{id}',[ClientController::class,'destroy']);
Route::get('view/{id}',[ClientController::class,'view']);
Route::get('edit/{id}',[ClientController::class,'edit']);
Route::post('update/{id}',[ClientController::class,'update']);

//status
Route::get('Status',[StatusController::class,'index'])->name('status');
Route::post('Add-status',[StatusController::class,'store'])->name('addstatus');
Route::get('deletstatus/{id}',[StatusController::class,'destroy']);
Route::get('deletpriority/{id}',[PriorityController::class,'destroy']);


//department
Route::get('Setup',[DepartmentController::class,'index'])->name('Setup');
Route::post('Add-setup',[DepartmentController::class,'store'])->name('addsetup');
Route::get('deletdepartments/{id}',[DepartmentController::class,'destroy']);
Route::get('deletdesignations/{id}',[DesignationController::class,'destroy']);


// Employe
Route::get('/viewregister',[EmployeController::class, 'index']);
Route::post('/register-employee',[EmployeController::class, 'store'])->name('emp-register');
Route::get('editemployee/{id}',[EmployeController::class,'edit']);
Route::post('updateemployee/{id}',[EmployeController::class,'update']);
Route::get('deletemployee/{id}',[EmployeController::class,'destroy']);