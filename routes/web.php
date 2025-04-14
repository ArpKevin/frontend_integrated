<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get("/dashboard", function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/profile", function () {
    return view('profile');
})->name('profile');

Route::get("/comment", function () {
    return view('comment');
})->name('comment');

// Route::get("/settings", function () {
//     return view('settings');
// });

// Route::get("/logout", function () {
//     return view('logout');
// });

// Route::get("/login", function () {
//     return view('login');
// });

// Route::get("/register", function () {
//     return view('register');
// });