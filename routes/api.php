<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/read/{id?}', [BookController::class, 'read']);
Route::get('/readAuth/{id?}', [AuthorController::class, 'read']);
Route::post('/create', [BookController::class, 'create']);  
Route::put('/update', [BookController::class, 'update']);
Route::delete('/delete/{id}', [BookController::class, 'delete']);
Route::post('/createAuth', [AuthorController::class, 'create']);
Route::put('/updateAuth', [AuthorController::class, 'update']);
Route::delete('/deleteAuth/{id}', [AuthorController::class, 'delete']);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::post('/me', [AuthController::class, 'me']);
});