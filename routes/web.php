<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authentication.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('index');

Route::get('/register', function () {
    return view('authentication.register');
})->name('register');