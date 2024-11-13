<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');  // Pastikan 'home' sesuai dengan nama file Blade
});

Route::get('/services', function () {
    return view('services');  // Pastikan 'home' sesuai dengan nama file Blade
});

Route::get('/about', function () {
    return view('about');  // Pastikan 'home' sesuai dengan nama file Blade
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

// Login route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
