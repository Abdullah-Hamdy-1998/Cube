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
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::view('/', 'pages.home')->name('home');

    Route::resource('users', UserController::class)->middleware('can:read-users');
    Route::delete('user-delete', [UserController::class, 'destroy'])->middleware('can:write-users');
    Route::delete('users-delete', [UserController::class, 'multipleDelete'])->middleware('can:write-users');

    Route::resource('items', ItemController::class)->middleware('can:read-data');
    Route::delete('item-delete', [ItemController::class, 'destroy'])->name('ajax.items.delete')->middleware('can:write-data');

    Route::resource('suppliers', SupplierController::class)->middleware('can:read-data');

    Route::resource('customers', CustomerController::class)->middleware('can:read-data');

    Route::resource('infos', ShipmentInfoController::class)->middleware('can:read-data');


    Route::resource('shipments', ShipmentController::class)->middleware('can:read-shipments');

    Route::get('inventory', [InventoryController::class, 'index'])->name('inventory.index')->middleware('can:read-inventory');
    Route::get('inventory/show', [InventoryController::class, 'show'])->name('inventory.show')->middleware('can:read-inventory');

    Route::get('reports', ReportController::class)->name('reports')->middleware('can:read-reports');

    Route::get('trash/users', [TrashController::class, 'viewUsers'])->name('trash.users')->middleware('can:read-trash');
    Route::delete('trash/user-delete', [TrashController::class, 'destroyUser'])->name('trash.user-delete')->middleware('can:write-trash');
    Route::post('trash/user-restore', [TrashController::class, 'restoreUser'])->name('trash.user-restore')->middleware('can:write-trash');

    Route::get('trash/items', [TrashController::class, 'viewItems'])->name('trash.items')->middleware('can:read-trash');
    Route::delete('trash/item-delete', [TrashController::class, 'destroyItem'])->name('trash.item-delete')->middleware('can:write-trash');
    Route::post('trash/item-restore', [TrashController::class, 'restoreItem'])->name('trash.item-restore')->middleware('can:write-trash');

    Route::get('trash/suppliers', [TrashController::class, 'viewSuppliers'])->name('trash.suppliers')->middleware('can:read-trash');
    Route::delete('trash/supplier-delete', [TrashController::class, 'destroySupplier'])->name('trash.supplier-delete')->middleware('can:write-trash');
    Route::post('trash/supplier-restore', [TrashController::class, 'restoreSupplier'])->name('trash.supplier-restore')->middleware('can:write-trash');

    Route::get('trash/customers', [TrashController::class, 'viewCustomers'])->name('trash.customers')->middleware('can:read-trash');
    Route::delete('trash/customer-delete', [TrashController::class, 'destroyCustomer'])->name('trash.customer-delete')->middleware('can:write-trash');
    Route::post('trash/customer-restore', [TrashController::class, 'restoreCustomer'])->name('trash.customer-restore')->middleware('can:write-trash');

    Route::get('trash/shipments-types', [TrashController::class, 'viewShipmentsTypes'])->name('trash.shipments-types')->middleware('can:read-trash');
    Route::delete('trash/shipments-type-delete', [TrashController::class, 'destroyShipmentsType'])->name('trash.shipments-type-delete')->middleware('can:write-trash');
    Route::post('trash/shipments-type-restore', [TrashController::class, 'restoreShipmentsType'])->name('trash.shipments-type-restore')->middleware('can:write-trash');

    Route::get('settings', SettingController::class)->name('settings')->middleware('can:read-settings');

    Route::get('about', AboutController::class)->name('about');
});
