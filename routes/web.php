<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Web\frontContr;
use App\Http\Controllers\Admin\fronContr;
use App\Http\Controllers\Admin\blogContr;

// Public Routes
Route::group(['prefix' => ''], function () {
    Route::get('/', [frontContr::class, 'HomeView'])->name('home');
    Route::get('/home', [frontContr::class, 'HomeView'])->name('home.page');
    Route::get('/about', [frontContr::class, 'AboutView'])->name('about');
    Route::get('/blog', [frontContr::class, 'BlogView'])->name('blog');
    Route::get('/show', [frontContr::class, 'ShowView'])->name('show');
});

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [fronContr::class, 'HomeView'])->name('admin.home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::resource('blog', blogContr::class);
});

// Auth Routes
Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
    Route::post('/register/save', [RegisterController::class, 'store'])->name('auth.register.save');
});

// Login View Route (for non-authenticated users)
Route::get('/login', [LoginController::class, 'loginView'])->name('login');
