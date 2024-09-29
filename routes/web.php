<?php

use Illuminate\Support\Facades\Route;

Route::get('/feed', function () {
    return view('feed');
});


Route::get('/login', function () {
    return view('login');
});

