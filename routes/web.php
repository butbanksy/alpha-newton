<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Professor\ProfessorController;
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


Route::redirect('/', '/fr');
Route::redirect('/admin', '/fr/admin');


Route::group(['prefix' => '{language}'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/header', [HomeController::class, 'header']);

    //Admin routes
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/login', [AdminController::class, 'login']);
    Route::get('/admin/students', [AdminController::class, 'showStudents']);

    Route::get('/inscription', [HomeController::class, 'inscription']);

    //Professor routes
    Route::get('/inscription/professeur', [ProfessorController::class, 'index']);
    Route::post('/inscription/professeur', [ProfessorController::class, 'store']);


    Route::get('/pdf', [ProfessorController::class, 'pdf']);

    Auth::routes();
});

