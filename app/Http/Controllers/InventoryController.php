<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Shipment;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $this->authorize('read-inventory');

        $items = Item::with('shipments')->get();
        return view('pages.inventory.index', ['items' => $items]);
    }
    public function show($id)
    {
        $this->authorize('read-inventory');

        $item = Item::find($id);
        $shipments = $item->shipments;
     

        return view('pages.inventory.show', ['item' => $item, 'shipments' => $shipments]);
    }
}
