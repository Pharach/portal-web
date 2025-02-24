<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('user');
})->name('user.th');

Route::get('/en', function () {
    return view('user_en');
})->name('user.en');
