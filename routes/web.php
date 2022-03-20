<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('/', 'pages.home')->name('home');
    Route::resource('users', UserController::class);
    Route::resource('items', ItemController::class);
});
