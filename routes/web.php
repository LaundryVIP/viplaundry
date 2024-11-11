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
