<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
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
    return view('welcome');
});

Route::group(['middleware' => 'auth'],function(){
  Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');  
  Route::get('tasks',[TaskController::class,'index'])->name('tasks');
  Route::get('add_task',[TaskController::class,'add_task'])->name('add_task');
  Route::post('save_task',[TaskController::class,'store'])->name('save_task');
  Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
  Route::put('tasks/{id}/update',[TaskController::class,'update']);
  Route::get('tasks/{id}/delete',[TaskController::class,'destroy']);
  Route::get('profile',[ProfileController::class,'index'])->name('profile');
  Route::put('update_profile',[ProfileController::class,'update_profile'])->name('update_profile');
  Route::get('update_password',[UpdatePasswordController::class,'update_pasword'])->name();
});
require __DIR__.'/auth.php';
