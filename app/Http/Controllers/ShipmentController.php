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

        $shipmentItems = json_decode($request->shipment);
        // dd($shipmentItems);

        if ($shipmentItems[0]->shipmentable_type == 'customer') {
            $customer = Customer::find($shipmentItems[0]->shipmentable_id);
            $shipment =  $customer->shipments()->create([
                'user_id' => Auth::id(),
                'shipment_info_id' => $shipmentItems[0]->shipment_type,
                'description' => $shipmentItems[0]->description,
            ]);
        } else if ($shipmentItems[0]->shipmentable_type == 'supplier') {
            $supplier = Supplier::find($shipmentItems[0]->shipmentable_id);
            $shipment =  $supplier->shipments()->save([
                'user_id' => Auth::id(),
                'shipment_info_id' => $shipmentItems[0]->shipment_type,
                'description' => $shipmentItems[0]->description,
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
