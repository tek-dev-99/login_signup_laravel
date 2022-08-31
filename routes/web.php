<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[LoginController::class , 'index'])->name('index');
Route::get('/registration',[RegisterationController::class , 'index'])->name('index');
Route::Post('/store',[RegisterationController::class , 'store'])->name('store');
Route::Post('/login',[LoginController::class , 'login'])->name('login');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('index')->middleware('auth');
Route::get('/logout',[LoginController::class , 'logout'])->name('logout');
Route::get('/login',function(){
 return view('index');
});
