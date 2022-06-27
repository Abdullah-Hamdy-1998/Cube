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
        $this->authorize('read-data');

        $shipments = Shipment::with('shipmentable')->get();
        return view('pages.shipments.index', ['shipments' => $shipments]);
    }

    public function create()
    {
        $this->authorize('write-data');

        $shipmentTypes = ShipmentInfo::all();
        $customers = Customer::all();
        $suppliers = Supplier::all();
        $items = Item::all();
        return view('pages.shipments.create', ['shipmentTypes' => $shipmentTypes, 'customers' => $customers, 'suppliers' => $suppliers, 'items' => $items]);
    }

    public function store(Request $request)
    {
        $this->authorize('write-data');

        define('FIRST_RECORD', 0);
        define('IMPORT', '1');
        define('EXPORT', '2');

        $shipmentItems = json_decode($request->shipment);
        $shipmentItem = $shipmentItems[FIRST_RECORD];

        if ($shipmentItem->shipmentable_type == 'customer') {
            $customer = Customer::find($shipmentItem->shipmentable_id);
            $shipment =  $customer->shipments()->create([
                'user_id' => Auth::id(),
                'shipment_info_id' => $shipmentItem->shipment_type,
                'description' => $shipmentItem->description,
            ]);
        } else if ($shipmentItem->shipmentable_type == 'supplier') {
            $supplier = Supplier::find($shipmentItem->shipmentable_id);
            $shipment =  $supplier->shipments()->create([
                'user_id' => Auth::id(),
                'shipment_info_id' => $shipmentItem->shipment_type,
                'description' => $shipmentItem->description,
            ]);
        }
        foreach ($shipmentItems as $item) {
            $shipment->items()->attach($item->item_id, ['quantity' => $item->item_quantity, 'weight' => $item->item_weight]);
            $shipment->logs()->create([
                'user_id' => Auth::id(),
                'action' => 'Create',
                'data' => $shipmentItem->description,
            ]);
            if ($shipmentItem->shipment_type == IMPORT) {
                $item_ = Item::find($item->item_id);
                $item_->weight += $item->item_weight;
                $item_->quantity += $item->item_quantity;
                $item_->save();
            } else if ($shipmentItem->shipment_type == EXPORT) {
                $item_ = Item::find($item->item_id);
                $item_->weight -= $item->item_weight;
                $item_->quantity -= $item->item_quantity;
                $item_->save();
            }
        }
    }

    public function show()
    {
        $this->authorize('read-data');

        return view('pages.shipments.show');
    }
}
