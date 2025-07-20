<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Admin Page
Route::get('/home', function () {
    return view('admin.home');
})->name('home')->middleware('auth');

Route::get('/antrian', function () {
    return view('admin.antrian');
})->name('antrian')->middleware('auth');

Route::get('/dokter', function () {
    return view('admin.dokter');
})->name('dokter')->middleware('auth');

Route::get('/poli', function () {
    return view('admin.poli');
})->name('poli')->middleware('auth');


// Template
Route::get('/template', function () {
    return view('admin.template1');
})->name('home')->middleware('auth');

Route::get('/template2', function () {
    return view('admin.template2');
})->name('home')->middleware('auth');


// Later
// Route::get('/antrian', 'AdminController@antrian');
// Route::post('/antrian/{id}/panggil', 'AdminController@panggilAntrian');
// Route::post('/antrian/{id}/selesai', 'AdminController@selesaiAntrian');

// Route::get('/dokter', 'DokterController@index');
// Route::post('/dokter/tambah', 'DokterController@tambah');

// Route::get('/poli', 'PoliController@index');
// Route::post('/poli/tambah', 'PoliController@tambah');
