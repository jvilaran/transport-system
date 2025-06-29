<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DriverController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::any('/login', [AuthController::class, 'login'])->name('login');
Route::any('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/services', [UserController::class, 'services'])->name('services');
