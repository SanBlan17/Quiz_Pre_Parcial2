<?php

use Illuminate\Support\Facades\Route;
use App\Models\Band;
use App\Models\Genre;
use App\Http\Controllers\BandController;
use App\Http\Controllers\GenreController;

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

Route::get('/', function () {

});
Route::get('/bands', [BandController::class, 'index']);
Route::get('/bands/{id}', [BandController::class, 'show']);
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);



