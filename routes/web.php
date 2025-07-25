<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PoliController;

Route::get('/', function () {
    return redirect()->route('login');
})->name('login');

// 404 Route
Route::fallback(function () {
    return redirect()->route('home');
});

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticating'])->name('authenticating');
Route::get('/register', [LoginController::class,'register'])->name('register');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AdminController::class,'index'])->name('home');
    
    // Antrian Routes
    Route::prefix('antrian')->group(function () {
        Route::get('/', [AntrianController::class, 'index'])->name('antrian');
        Route::post('/store', [AntrianController::class, 'store'])->name('antrian.store');
        Route::get('/edit/{id}', [AntrianController::class, 'edit'])->name('antrian.edit');
        Route::put('/update/{id}', [AntrianController::class, 'update'])->name('antrian.update');
        Route::delete('/destroy/{id}', [AntrianController::class, 'destroy'])->name('antrian.destroy');
        Route::post('/panggil/{id}', [AntrianController::class, 'panggil'])->name('antrian.panggil');
        Route::post('/selesai/{id}', [AntrianController::class, 'selesai'])->name('antrian.selesai');
    });

    // Poli Routes
    Route::prefix('poli')->group(function () {
        Route::get('/', [PoliController::class, 'index'])->name('poli');
        Route::post('/store', [PoliController::class, 'store'])->name('poli.store');
        Route::get('/edit/{id}', [PoliController::class, 'edit'])->name('poli.edit');
        Route::put('/update/{id}', [PoliController::class, 'update'])->name('poli.update');
        Route::delete('/destroy/{id}', [PoliController::class, 'destroy'])->name('poli.destroy');
    });

    // Dokter Routes
    Route::prefix('dokter')->group(function () {
        Route::get('/', [DokterController::class,'index'])->name('dokter');
        Route::post('/store', [DokterController::class,'store'])->name('dokter.store');
        Route::get('/edit/{id}', [DokterController::class,'edit'])->name('dokter.edit');
        Route::put('/update/{id}', [DokterController::class,'update'])->name('dokter.update');
        Route::delete('/destroy/{id}', [DokterController::class,'destroy'])->name('dokter.destroy');
    });

    // Template Routes
    Route::get('/template', function () {
        return view('admin.template1');
    })->name('template');

    Route::get('/template2', function () {
        return view('admin.template2');
    })->name('template2');
});
