<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    // return view('users.landing');
    return redirect()->route('login');
})->name('home');

// 404 Route
Route::fallback(function () {
    return redirect()->route('home');
});

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticating'])->name('authenticating');

Route::get('/register', [LoginController::class,'register'])->name('register');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', function () {
    return view('admin.home');
})->middleware('auth');
