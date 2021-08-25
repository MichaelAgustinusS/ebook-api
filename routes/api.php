<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/me', [AuthController::class, 'me']);
Route::post('/create', [BookController::class, 'create']);
Route::get('/read/{id?}', [BookController::class, 'read']);
Route::put('/update', [BookController::class, 'update']);
Route::delete('/delete/{id}', [BookController::class, 'delete']);
