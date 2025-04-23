<?php

use Illuminate\Support\Facades\Route;


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

Route::get("/login", function () {
    return view('auth.login');
})->name('login');

Route::get("/register", function () {
    return view('auth.register');
})->name('register');
