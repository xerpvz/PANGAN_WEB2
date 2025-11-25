<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;

Route::middleware(['web'])->group(function () {

    // PUBLIC ROUTES
    Route::get('/', function () {
        return view('portfolio');
    });

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // DEBUG ROUTE — CHECK SESSION LOGIN
    Route::get('/check', function () {
        return Auth::check() ? 'LOGGED IN' : 'NOT LOGGED IN';
    });

    // PROTECTED ROUTES (REQUIRES LOGIN)
    Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('portfolio', PortfolioController::class);
});
});
