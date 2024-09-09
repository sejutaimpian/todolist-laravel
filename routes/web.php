<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('/toggletodo/{todo}', [TodoController::class, 'toggleTodo'])->name('toggletodo')->middleware('auth');
Route::resource('/todo', TodoController::class)->middleware('auth');

Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/auth/signin', [AuthController::class, 'signin'])->name('signin');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
