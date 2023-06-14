<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Bus;
use App\Http\Controllers\Supervisor;
use App\Http\Controllers\Manager;

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

//landing page
Route::get('/', function () {
    return view('main_index');
});

//login page
Route::get('index', function () {
    return view('index');
});

//checking credentials
Route::post('/check',[Login::class,'check_cred']);

//getting session details
Route::get('/welcome',[Login::class,'protect']);

//logout function
Route::get('/logout', [Login::class, 'logout'])->name('logout');

//supervisor dashboards but goes to get session details
Route::get('Adashboard',[Login::class,'protect']);

//supervisor dashboards but goes to get session details
Route::get('SAdashboard',[Login::class,'protect']);

//show bus details
Route::get('bus_show',[Bus::class,'show']);

//creating bus
Route::get('create_bus',[Bus::class,'create']);

//whenever it is submitted
Route::post('bus_submit',[Bus::class,'store']);

//clicking on edit bus
Route::get('bus_edit/{id}',[Bus::class,'edit']);

Route::post('bus_update/{id}',[Bus::class,'update'])->name('bus.update');

//Deleting Bus
Route::get('bus_delete/{id}',[Bus::class,'destroy']);

//show supervisor details
Route::get('supervisor_show',[Supervisor::class,'show']);

//creating supervisor
Route::get('create_supervisor',[Supervisor::class,'create']);

//whenever it is submitted
Route::post('supervisor_submit',[Supervisor::class,'store']);

//clicking on edit supervisor
Route::get('supervisor_edit/{id}',[Supervisor::class,'edit']);

Route::post('supervisor_update/{id}',[Supervisor::class,'update'])->name('supervisor.update');

//Deleting supervisor
Route::get('supervisor_delete/{id}',[Supervisor::class,'destroy']);

//show manager details
Route::get('manager_show',[Manager::class,'show']);

//creating manager
Route::get('create_manager',[Manager::class,'create']);

//whenever it is submitted
Route::post('manager_submit',[Manager::class,'store']);

//clicking on edit manager
Route::get('manager_edit/{id}',[Manager::class,'edit']);

Route::post('manager_update/{id}',[Manager::class,'update'])->name('manager.update');

//Deleting manager
Route::get('manager_delete/{id}',[Manager::class,'destroy']);

//auditLog
Route::get('audit_log_show',[Login::class,'auditlog']);
