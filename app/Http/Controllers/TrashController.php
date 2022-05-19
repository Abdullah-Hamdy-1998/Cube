<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function viewUsers()
    {
        return view('pages.trash.users');
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
