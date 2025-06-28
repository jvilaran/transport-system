<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/login', [UserController::class, 'login'])->name('login');
Route::any('/register', [UserController::class, 'register'])->name('register');
Route::get('/dashboard/{id}', [UserController::class, 'dashboard'])->name('dashboard');
