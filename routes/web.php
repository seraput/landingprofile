<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfilerController;
use App\Http\Controllers\TransactionController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'index']);
Route::get('/detailproduct', [HomeController::class, 'index']);

// Auth Route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot', [AuthController::class, 'forgot']);

// Pages Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/master', [MasterController::class, 'index'])->middleware('auth')->name('master');
Route::get('/profile', [ProfilerController::class, 'index'])->middleware('auth')->name('profile');
Route::get('/content', [ContentController::class, 'index'])->middleware('auth')->name('content');