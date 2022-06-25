<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Shipment;
use App\Models\ShipmentInfo;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipmentController extends Controller
{

    public function index()
    {
        $shipments = Shipment::with('shipmentable')->get();
        return view('pages.shipments.index', ['shipments' => $shipments]);
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
        define('FIRST_RECORD', 0);

        $shipmentItems = json_decode($request->shipment);

        if ($shipmentItems[FIRST_RECORD]->shipmentable_type == 'customer') {
            $customer = Customer::find($shipmentItems[FIRST_RECORD]->shipmentable_id);
            $shipment =  $customer->shipments()->create([
                'user_id' => Auth::id(),
                'shipment_info_id' => $shipmentItems[FIRST_RECORD]->shipment_type,
                'description' => $shipmentItems[FIRST_RECORD]->description,
            ]);
        } else if ($shipmentItems[FIRST_RECORD]->shipmentable_type == 'supplier') {
            $supplier = Supplier::find($shipmentItems[FIRST_RECORD]->shipmentable_id);
            $shipment =  $supplier->shipments()->create([
                'user_id' => Auth::id(),
                'shipment_info_id' => $shipmentItems[FIRST_RECORD]->shipment_type,
                'description' => $shipmentItems[FIRST_RECORD]->description,
            ]);
        }
        foreach ($shipmentItems as $item) {
            $shipment->items()->attach($item->item_id, ['quantity' => $item->item_quantity, 'weight' => $item->item_weight]);
        }
    }

    public function show()
    {
        return view('pages.shipments.show');
    }
}
