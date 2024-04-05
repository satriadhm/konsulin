<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/admin-dashboard', function () {
    return view('doctor.doctor-dashboard');
})->name('admin-dashboard');
Route::get('/mypatients', function () {
    return view('doctor.doctor-patients');
})->name('mypatients');
Route::get('/admin-profile', function () {
    return view('doctor.doctor-profile');
})->name('admin-profile');


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


