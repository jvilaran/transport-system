<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/login', [UserController::class, 'login'])->name('login');
Route::any('/register', [UserController::class, 'register'])->name('register');
Route::any('/logOut', [UserController::class, 'logOut'])->name('log_out');
Route::get('/dashboard/{id}', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
Route::get('/services/{id}', [UserController::class, 'services'])->name('services');
