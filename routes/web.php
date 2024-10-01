<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/feed', [FeedController::class, 'index']);

