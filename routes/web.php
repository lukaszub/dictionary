<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;

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

Route::get('/', [WordController::class, 'index']);
Route::get('/words/create', [WordController::class, 'create']);
Route::post('/words', [WordController::class, 'store']);
Route::get('/words/show/{word}', [WordController::class, 'show']);
Route::get('/words/edit/{word}', [WordController::class, 'edit']);
Route::put('/words/update/{word}/{definition}', [WordController::class, 'update']);

Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'destroy']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/users/authenticate',[UserController::class, 'authenticate']);