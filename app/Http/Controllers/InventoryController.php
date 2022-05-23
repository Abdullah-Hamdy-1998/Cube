<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('pages.inventory.index');
    }
    public function show()
    {
        return view('pages.inventory.show');
    }
}
