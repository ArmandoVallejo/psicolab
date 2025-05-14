<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;

// Agrupar rutas de autenticación
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/patients', [PatientController::class, 'index'])->name('patients');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
