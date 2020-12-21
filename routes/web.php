<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Professor\ProfessorController;
use App\Http\Controllers\Student\StudentController;
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
    Route::get('/test', [HomeController::class, 'test']);

    //Admin routes
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/login', [AdminController::class, 'login']);
    
    Route::post('/admin/students/excel', [AdminController::class, 'export']);
    Route::get('/admin/students', [AdminController::class, 'showStudents']);
    Route::get('/admin/student/{id}', [AdminController::class, 'showStudent']);
    Route::post('/admin/students/filter', [AdminController::class, 'filterStudents']);
    Route::get('/admin/student/edit/{id}', [AdminController::class, 'showStudent']);
    Route::get('/admin/student/edit/{id}', [AdminController::class, 'modifyStudent']);
    Route::put('/admin/student/edit/{student}', [AdminController::class, 'putStudent']);
    Route::get('/admin/student/delete/{id}', [AdminController::class, 'deleteStudent']);

    Route::get('/admin/professeurs', [AdminController::class, 'showProfessors']);
    Route::get('/admin/professeur/{id}', [AdminController::class, 'showProfessor']);
    Route::get('/admin/professeur/edit/{id}', [AdminController::class, 'modifyProfessor']);
    Route::put('/admin/professeur/edit/{professor}', [AdminController::class, 'putProfessor']);
    Route::get('/admin/professeur/delete/{id}', [AdminController::class, 'deleteProfessor']);

    Route::get('/admin/subjects/', [AdminController::class, 'showSubjects']);
    Route::get('/admin/subject/add', [AdminController::class, 'addSubject']);
    Route::post('/admin/subject/add', [AdminController::class, 'storeSubject']);
    Route::get('/admin/subject/edit/{id}', [AdminController::class, 'modifySubject']);
    Route::put('/admin/subject/edit/{id}', [AdminController::class, 'putSubject']);
    Route::get('/admin/subject/delete/{id}', [AdminController::class, 'deleteSubject']);


    Route::get('/inscription', [HomeController::class, 'inscription']);

    //Professor routes
    Route::get('/inscription/professeur', [ProfessorController::class, 'index']);
    Route::post('/inscription/professeur', [ProfessorController::class, 'store']);

    //Student routes
    Route::get('/inscription/etudiant', [StudentController::class, 'index']);
    Route::post('/inscription/etudiant', [StudentController::class, 'store']);



    Route::get('/admin/students/excel_export', [AdminController::class, 'excel_export']);

    Route::post('/admin/students/pdf', [AdminController::class, 'pdf']);

    Route::get('/getNiveau/{niveau}', [StudentController::class, 'getNiveau']);
    Auth::routes();
});

