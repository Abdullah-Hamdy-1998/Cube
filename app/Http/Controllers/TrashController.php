<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Item;
use App\Models\ShipmentInfo;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function viewUsers()
    {
        $deletedUsers = User::onlyTrashed()->get();
        return view('pages.trash.users', [
            'deletedUsers' => $deletedUsers
        ]);
    }

    public function restoreUser(Request $request)
    {
        $user = User::onlyTrashed()->find($request->id);
        $user->restore();
    }
    public function destroyUser(Request $request)
    {
        $user = User::onlyTrashed()->find($request->id);
        $user->forceDelete();
    }

    public function viewItems()
    {
        $deletedItems = Item::onlyTrashed()->get();
        return view('pages.trash.items', [
            'deletedItems' => $deletedItems
        ]);
    }

    public function restoreItem(Request $request)
    {
        $item = Item::onlyTrashed()->find($request->id);
        $item->restore();
    }
    public function destroyItem(Request $request)
    {
        $item = Item::onlyTrashed()->find($request->id);
        $item->forceDelete();
    }

    public function viewSuppliers()
    {
        $deletedSuppliers = Supplier::onlyTrashed()->get();
        return view('pages.trash.suppliers', [
            'deletedSuppliers' => $deletedSuppliers
        ]);
    }
    public function restoreSupplier(Request $request)
    {
        $supplier = Supplier::onlyTrashed()->find($request->id);
        $supplier->restore();
    }
    public function destroySupplier(Request $request)
    {
        $supplier = Supplier::onlyTrashed()->find($request->id);
        $supplier->forceDelete();
    }

    public function viewCustomers()
    {
        $deletedCustomers = Customer::onlyTrashed()->get();
        return view('pages.trash.customers', [
            'deletedCustomers' => $deletedCustomers
        ]);
    }
    public function restoreCustomer(Request $request)
    {
        $customer = Customer::onlyTrashed()->find($request->id);
        $customer->restore();
    }
    public function destroyCustomer(Request $request)
    {
        $customer = Customer::onlyTrashed()->find($request->id);
        $customer->forceDelete();
    }
    public function viewShipmentsTypes()
    {
        $deletedShipmentsTypes = ShipmentInfo::onlyTrashed()->get();
        return view('pages.trash.shipments-types', [
            'deletedShipmentsTypes' => $deletedShipmentsTypes
        ]);
    }
    public function restoreShipmentsType(Request $request)
    {
        $shipmentsType = ShipmentInfo::onlyTrashed()->find($request->id);
        $shipmentsType->restore();
    }
    public function destroyShipmentsType(Request $request)
    {
        $shipmentsType = ShipmentInfo::onlyTrashed()->find($request->id);
        $shipmentsType->forceDelete();
    }
}
