<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LokalenController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'home']);

Route::get('/courses/create', [CoursesController::class, 'create']);
Route::get('/courses/{id}', [CoursesController::class, 'show']);
Route::post('/courses', [CoursesController::class, 'store']);

Route::get('/lokalen/create', [LokalenController::class, 'create']);
Route::post('/lokalen', [LokalenController::class, 'store']);

Route::get('/students/create', [StudentsController::class, 'create']);
Route::get('/students/{id}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);

