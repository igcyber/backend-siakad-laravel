<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.auth.auth-login');
});

Route::get('/register', function () {
    return view('pages.auth.auth-register');
});

Route::get('/forgot', function () {
    return view('pages.auth.auth-forgot-password');
});

Route::get('/reset', function () {
    return view('pages.auth.auth-reset-password');
});

Route::get('/', function () {
    return view('pages.app.dashboard', ['type_menu' => '']);
});
