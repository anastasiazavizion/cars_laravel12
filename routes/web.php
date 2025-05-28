<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarController;

Route::get('/', [HomeController::class, 'index'] );

Route::view('/about', 'about')->name('about');

Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::get('/login', [LoginController::class, 'create'])->name('login');

Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');

Route::resource('cars',CarController::class);
