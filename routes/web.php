<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('timeline.home');
// });

Route::get('/', 'App\Http\Controllers\PostController@index');

Route::post('/posts', 'App\Http\Controllers\PostController@store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
