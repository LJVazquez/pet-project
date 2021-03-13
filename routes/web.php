<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('timeline.home');
})->name('home');

require __DIR__ . '/auth.php';
