<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShipmentTypeController;
use App\Http\Controllers\ShipmentInfoController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('/', 'pages.home')->name('home');
    Route::resource('users', UserController::class)->except('delete');
    Route::delete('user-delete/', [UserController::class, 'destroy'])->name('ajax.users.delete');
    Route::resource('items', ItemController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('shipments-types', ShipmentInfoController::class);
    Route::resource('shipments', ShipmentController::class);
    Route::resource('infos', ShipmentInfoController::class);
});
