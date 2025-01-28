<?php

use App\Http\Controllers\BandsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\RecordLabelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/bands', [BandsController::class,"index"]);
Route::get('/bands/{id}', [BandsController::class,"show"]);

Route::get('/genres', [GenresController::class,"index"]);
Route::get('/bands/{id}', [GenresController::class,"show"]);

Route::post('/generate_labels/{n}', [RecordLabelsController::class,"generate"]);
Route::get('/record_labels', [RecordLabelsController::class,"index"]);