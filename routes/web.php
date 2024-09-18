<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


// Authentication
Route::get('/login', function () {
    return view('login');
})->name('auth.login');

Route::get('/register', function () {
    return view('register');
})->name('auth.register');

Route::get('/forget-password', function () {
    return view('forget-password');
})->name('auth.forget-password');

