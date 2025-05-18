<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');