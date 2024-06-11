<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PracticeController;
use App\Practice;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice', [PracticeController::class, 'sample']);

Route::get('/practice2', [PracticeController::class, 'sample2']);

Route::get('/practice3', [PracticeController::class, 'sample3']);

Route::get('/getPractice', [PracticeController::class, 'getPractice']);

Route::get('/movies', [MovieController::class, 'getMovies']);

Route::get('/admin/movies', [MovieController::class, 'getMoviesAdmin'])->name('admin.movies');

Route::get('/admin/movies/create', [MovieController::class, 'create']);

Route::post('/admin/movies/store', [MovieController::class, 'store'])->name('admin.movies.store');

Route::get('/admin/movies/{movie}/edit', [MovieController::class, 'edit'])->name('admin.movies.edit');

Route::patch('/admin/movies/{movie}/update', [MovieController::class, 'update'])->name('admin.movies.update');
