<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShipmentInfoController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
use App\Policies\InventoryPolicy;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::view('/', 'pages.home')->name('home');

    Route::resource('users', UserController::class)->except('delete')->middleware('can:read-users');
    Route::delete('user-delete/', [UserController::class, 'destroy'])->name('ajax.users.delete')->middleware('can:write-users');


    Route::resource('items', ItemController::class)->middleware('can:read-data');

    Route::resource('suppliers', SupplierController::class)->middleware('can:read-data');

    Route::resource('customers', CustomerController::class)->middleware('can:read-data');

    Route::resource('infos', ShipmentInfoController::class)->middleware('can:read-data');


    Route::resource('shipments', ShipmentController::class);

    Route::get('inventory', InventoryController::class)->name('inventory');

    Route::get('reports', ReportController::class)->name('reports');

    Route::get('trash/users', [TrashController::class, 'viewUsers'])->name('trash.users');
    Route::get('trash/items', [TrashController::class, 'viewItems'])->name('trash.items');
    Route::get('trash/suppliers', [TrashController::class, 'viewSuppliers'])->name('trash.suppliers');
    Route::get('trash/customers', [TrashController::class, 'viewCustomers'])->name('trash.customers');
    Route::get('trash/shipments-types', [TrashController::class, 'viewShipmentsTypes'])->name('trash.shipments-types');

    Route::get('settings', SettingController::class)->name('settings');

    Route::get('about', AboutController::class)->name('about');
});
