<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('home');
});

// Halaman lain (contoh)
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

// Login dan Register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// (dilindungi middleware auth)
// Dashboard 
Route::get('/dashboard', function () {
    return view('dashboard.user');
})->middleware('auth')->name('dashboard');

// Dashboard Layanan Laundry Kiloan
Route::get('/laundry-kiloan', function () {
    return view('dashboard.laundrykiloan');
})->middleware('auth')->name('dashboard.laundrykiloan');

// Dashboard Layanan Laundry Satuan
Route::get('/laundry-satuan', function () {
    return view('dashboard.laundrysatuan');
})->middleware('auth')->name('dashboard.laundrysatuan');

// Dashboard Layanan Laundry Setrika Kiloan dan Lipat Baju
Route::get('/setrika-lipatbaju', function () {
    return view('dashboard.setrikalipatbaju');
})->middleware('auth')->name('dashboard.setrikalipatbaju');
