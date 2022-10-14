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

Route::resource('login', SignInController::class)->only(['index', 'store']);
Route::delete('/login/destroy', [LoginController::class, 'destroy']);
Route::resource('/register', SignUpController::class)->only('index', 'store');

Route::resource('profile', ProfileController::class)->middleware('auth');