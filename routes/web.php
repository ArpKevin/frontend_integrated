<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeaController;


Route::get("/", function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/profile", function () {
    return view('profile');
})->name('profile');

Route::get("/comment", function () {
    return view('comment');
})->name('comment');

Route::get("/feed", function () {
    return view('feed');
})->name('feed');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('ideas', IdeaController::class)->except('index','create','show')->middleware('auth');
Route::resource('ideas', IdeaController::class)->only('show');