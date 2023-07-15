<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Admin Routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // Admin routes here
    Route::post('/users', [AdminController::class, 'createUser']);
});

// Customer Routes
Route::prefix('customer')->middleware('auth:customer')->group(function () {
    // Customer routes here
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::post('/deposit', [TransactionController::class, 'deposit']);
    Route::post('/withdrawal', [TransactionController::class, 'withdrawal']);
});

