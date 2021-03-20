<?php

use App\Http\Controllers\DesignationController;
use App\Http\Controllers\ClientvisitController;
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
Route::get('/viewregister',[DesignationController::class, 'index']);
Route::post('/register-employee',[DesignationController::class, 'store'])->name('emp-register');


// marketing client visit 

Route::get('visit',[ClientvisitController::class,'index'])->name('visit');
Route::get('add-visit',[ClientvisitController::class,'addvisit'])->name('add_visit');

