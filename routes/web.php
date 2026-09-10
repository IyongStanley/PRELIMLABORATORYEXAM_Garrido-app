<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/contact-information', function () {
    return view('contactinformation');
})->name('contact');

Route::get('/developer-information', function () {
    return view('developerinformation');
})->name('developer');

Route::get('/hobbies', function () {
    return view('myhobbies');
})->name('hobbies');

Route::get('/career-path', function () {
    return view('myfuturecareer');
})->name('career');
