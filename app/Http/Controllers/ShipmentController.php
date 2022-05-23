<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function index()
    {
        return view('pages.shipments.index');
    }

    public function create()
    {
        return view('pages.shipments.create');
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
