<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('dashboard');

Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/auth/signin', [AuthController::class, 'signin'])->name('signin');
