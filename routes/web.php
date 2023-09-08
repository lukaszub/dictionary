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

//grouped route with middleware auth
Route::middleware(['auth', 'verified'])->group(function () {
  //displaying form for word creation
  Route::get('/words/create', [WordController::class, 'create']);
  //store new word into database
  Route::post('/words', [WordController::class, 'store']);
  //displaying selected word
  Route::get('/words/show/{word}', [WordController::class, 'show']);
  //displaying edit form for selected word
  Route::get('/words/edit/{word}', [WordController::class, 'edit']);
  //updating word and definition
  Route::put('/words/update/{word}/{definition}', [WordController::class, 'update']);

});

//displaying registration form
Route::get('/register', [UserController::class, 'create']);
//store new user into database
Route::post('/users', [UserController::class, 'store']);
//displaying login form
Route::get('/login', [UserController::class, 'login'])->name('login');
//authenticate logged in user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);
//logout user
Route::post('/logout', [UserController::class, 'destroy']);