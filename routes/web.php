<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\ClientvisitController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Auth;
use App\Models\employe;
use App\Models\User;
use GuzzleHttp\Middleware;
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

Route::group(['middleware' => ['auth']],function(){ 

// auth creatr
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  client list

Route::get('Client-list',[ClientController::class,'index'])->name('clientlist');
Route::get('viewaddclient',[ClientController::class,'addview'])->name('viewaddclient');
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
Route::get('/View-add-employe',[EmployeController::class, 'view'])->name('viewaddemploye');
Route::post('/register-employee',[EmployeController::class, 'store'])->name('emp-register');
Route::get('editemployee/{id}',[EmployeController::class,'edit']);
Route::post('updateemployee/{id}',[EmployeController::class,'update']);
Route::get('deletemployee/{id}',[EmployeController::class,'destroy']);


// project setup 
Route::get('Project',[ProjectController::class, 'index'])->name('project');
Route::post('addProject',[ProjectController::class, 'store'])->name('addProject');
Route::get('deleteproject/{id}',[ProjectController::class, 'destroy']);



// marter admin user create 
Route::get('User',[HomeController::class,'view'])->name('user_page_view');
Route::get('Add-user',[HomeController::class,'viewstore'])->name('adduser');
Route::post('Add-user',[HomeController::class,'store'])->name('create_user');
Route::get('deleteuser/{id}',[HomeController::class,'delete']);
Route::get('edituser/{id}',[HomeController::class,'edit']);
Route::post('Updateuser/{id}',[HomeController::class,'update']);

// area seatup 
Route::get('Area-setup',[AreaController::class,'index'])->name('area_page_view');
Route::post('Add_area',[AreaController::class,'store'])->name('addarea');
Route::get('areadelete/{id}',[AreaController::class,'destroy']);


//visit client 
Route::get('Visit-list',[VisitController::class,'index'])->name('visit_list');
Route::get('Add-visit',[VisitController::class,'create'])->name('add_page_view');
Route::post('Add-visit-client',[VisitController::class,'client'])->name('addvisitclient');
Route::post('Add-visit',[VisitController::class,'store'])->name('addvisit');
Route::get('fileview/{file_id}',[DocumentController::class,'index']);
Route::get('editvisit/{visitedit_id}',[VisitController::class,'edit']);
Route::get('/file/download/{download_id}',[DocumentController::class,'download'])->name('downloadfile');
Route::get('/visit/delete/{delete_id}',[VisitController::class,'destroy'])->name('delete_visit');

});