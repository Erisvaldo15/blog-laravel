<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('post');
Route::get('/author/{author:firstName}', [AuthorController::class, 'index'])->name('author');

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');

Route::controller(SignInController::class)->group(function () {
    Route::get('/login', 'index')->name('view-login');
    Route::get('/logout', 'destroy')->name('logout');
    Route::post('/login', 'store')->name('login');
});

Route::resource('/register', SignUpController::class)->only('store', 'create');
Route::resource('/profile', ProfileController::class)->except('destroy')->parameters(['profile' => 'user:firstName'])->middleware([
    "auth", "permission"
]);