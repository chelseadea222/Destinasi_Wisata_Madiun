<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\DestinasiController;

// ==========================================
// RUTE PUBLIK (Bisa diakses tanpa login)
// ==========================================

// Halaman Utama (Landing Page)
Route::get('/', function () {
    return view('landing'); 
});

// Jalur untuk Register
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'prosesRegister']);

// Jalur untuk Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'prosesLogin']);


// ==========================================
// RUTE PRIVATE (Wajib login / auth)
// ==========================================

// Semua rute di dalam grup ini otomatis dijaga oleh middleware 'auth'
Route::middleware('auth')->group(function () {
    
    // Jalur untuk Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // Halaman Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    // Jalur Destinasi (Cukup 1 baris ini saja, sudah mencakup index, create, store, edit, update, destroy)
    Route::resource('destinasi', DestinasiController::class);

    // Jalur Pengunjung
    Route::get('/pengunjung', [PengunjungController::class, 'index']);
    
});