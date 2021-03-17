<?php

use App\Http\Controllers\FollowsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('timeline.home');
// });

Route::get('/', function () {
    return redirect()->route('home');
});


Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('home');
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/profiles/{user:username}', [ProfilesController::class, 'show']);
    Route::post('/profiles/{user}/follow', [FollowsController::class, 'store']);
    Route::get('/profiles/{user}/edit', [ProfilesController::class, 'edit']);
    Route::patch('/profiles/{user}', [ProfilesController::class, 'update']);
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
// })->name('dashboard');
