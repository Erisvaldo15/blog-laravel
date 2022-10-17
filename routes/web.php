<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('post');
Route::get('/author/{author:id}', [AuthorController::class, 'index'])->name('author');

Route::controller(SignInController::class)->group(function () {
    Route::get('/login', 'index')->name('view-login');
    Route::get('/logout', 'destroy')->name('logout');
    Route::post('/login', 'store')->name('login');
});

Route::resource('/register', SignUpController::class)->only('index', 'store');
Route::resource('profile', ProfileController::class)->middleware('auth');