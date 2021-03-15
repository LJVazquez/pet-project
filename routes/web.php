<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('timeline.home');
// });

Route::get('/', function () {
    return redirect()->route('home');
});


Route::middleware('auth')->group(function () {
    Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('home');
    Route::post('/posts', 'App\Http\Controllers\PostController@store');
});

Route::get('/profiles/{user}', 'App\Http\Controllers\ProfilesController@show');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
// })->name('dashboard');
