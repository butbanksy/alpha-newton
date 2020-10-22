<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/header', [HomeController::class, 'header']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/login', [AdminController::class, 'login']);
Route::get('/ind',function(){
    return view("form_prof/index");
});

Auth::routes();
