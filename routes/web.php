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
