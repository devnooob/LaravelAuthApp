<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'in']);


Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'out']);


Route::get('signup', [\App\Http\Controllers\Auth\SignupController::class, 'create'])->name('signup');
Route::post('signup', [\App\Http\Controllers\Auth\SignupController::class, 'store']);
