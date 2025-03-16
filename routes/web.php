<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;

// Route untuk Login
Route::get('/login', [LoginController::class, 'index']);

// Route untuk Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route untuk List Item
Route::get('/items', [ItemController::class, 'index']);
