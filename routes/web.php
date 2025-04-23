<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;


Route::get("/", [DashboardController::class, "index"])->name('dashboard');

Route::get('profile', [UserController::class,'profile'])->middleware('auth')->name('profile');

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

Route::resource('ideas.comments', CommentController::class)->only('store')->middleware('auth');

Route::resource('users', UserController::class)->only('show', 'edit', 'update');