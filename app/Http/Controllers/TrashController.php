<?php

namespace App\Http\Controllers;

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
        return view('pages.trash.items');
    }
    public function viewSuppliers()
    {
        return view('pages.trash.suppliers');
    }
    public function viewCustomers()
    {
        return view('pages.trash.customers');
    }
    public function viewShipmentsTypes()
    {
        return view('pages.trash.shipments-types');
    }
}
