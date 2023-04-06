<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LokalenController;
use App\Http\Controllers\PagesController;
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
Route::get('/lokalen/create', [LokalenController::class, 'create']);
