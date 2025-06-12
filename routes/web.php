<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/park', function () {
    return view('park');
})->name('park');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
