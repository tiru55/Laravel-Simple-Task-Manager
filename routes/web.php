<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
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
  Route::view('profile', 'profile')->name('profile');
  
  Route::get('tasks',[TaskController::class,'index'])->name('tasks');
  Route::get('add_task',[TaskController::class,'add_task'])->name('add_task');
  Route::post('save_task',[TaskController::class,'store'])->name('save_task');
  Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
  Route::put('tasks/{id}/update',[TaskController::class,'update']);
  Route::get('tasks/{id}/delete',[TaskController::class,'destroy']);
});
require __DIR__.'/auth.php';
