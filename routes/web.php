<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::resource('/students', StudentController::class);
Route::get('/student', [StudentController::class, 'index'])->name('students.index');


Route::get('/grade', [GradeController::class, 'index']);

Route::get('/department', [DepartmentController::class, 'index']);

