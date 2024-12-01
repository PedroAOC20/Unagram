<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/post', [FeedController::class, 'show']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


Route::get('/feed', [FeedController::class, 'index']);


