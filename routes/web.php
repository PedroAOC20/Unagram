<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile/{id}', [ProfileController::class, 'show']);

Route::get('/post', [PostController::class, 'show']);
Route::get('/post/{id}', [PostController::class, 'detail']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


Route::get('/feed', [FeedController::class, 'index'])->name('feed');


