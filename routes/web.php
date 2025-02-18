<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

// Route untuk halaman publik
Route::get('/', function () {
    return redirect('/login');
});

// Route untuk autentikasi
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

// Route yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Master Layout Routes
    Route::prefix('layouts/dashboard')->group(function () {
        Route::view('/master', 'master')->name('master');

        // Partials Routes
        Route::prefix('partials')->group(function () {
            Route::view('/meta', 'partials.meta')->name('partials.meta');
            Route::view('/link', 'partials.link')->name('partials.link');
            Route::view('/navbar', 'partials.navbar')->name('partials.navbar');
            Route::view('/sidebar', 'partials.sidebar')->name('partials.sidebar');
            Route::view('/script', 'partials.script')->name('partials.script');
        });
    });

    // Content Routes
    Route::view('/content', 'content')->name('content');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Fallback route untuk halaman 404
Route::fallback(function () {
    return view('errors.404');
});
