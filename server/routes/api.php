<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/me', [AuthController::class, 'me'])->middleware('jwt.auth')->name('me');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('jwt.auth')->name('logout');
