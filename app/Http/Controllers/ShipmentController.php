<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Shipment;
use App\Models\ShipmentInfo;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function index()
    {
        return view('pages.shipments.index');
    }

    public function create()
    {
        $shipmentTypes = ShipmentInfo::all();
        $customers = Customer::all();
        $suppliers = Supplier::all();
        $items = Item::all();
        return view('pages.shipments.create', ['shipmentTypes' => $shipmentTypes, 'customers' => $customers, 'suppliers' => $suppliers, 'items' => $items]);
    }

    public function store(Request $request)
    {
    }

    public function show()
    {
        return view('pages.shipments.show');
    }

    public function edit(Shipment $shipment)
    {
        //
    }

    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    public function destroy(Shipment $shipment)
    {
        //
    }
}
