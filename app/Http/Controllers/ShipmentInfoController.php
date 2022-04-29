<?php

namespace App\Http\Controllers;

use App\Models\ShipmentInfo;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ShipmentInfoController extends Controller
{

    public function index()
    {
        $shipments_info = ShipmentInfo::all();
        return view('pages.shipments-info.index', ['shipments_info' => $shipments_info]);
    }

    public function create()
    {
        return view('pages.shipments-info.create');
    }

    public function store(Request $request)
    {
        ShipmentInfo::create($request->all());
        return  redirect()->route('infos.index');
    }

    public function show(ShipmentInfo $info)
    {
        // dd($shipmentInfo);
        return view('pages.shipments-info.show', ['shipment_info' => $info]);
    }

    public function edit(ShipmentInfo $info)
    {
        return view('pages.shipments-info.edit', ['shipment_info' => $info]);
    }

    public function update(Request $request, ShipmentInfo $info)
    {
        $info->update($request->all());
        return redirect()->route('infos.index');
    }

    public function destroy(ShipmentInfo $info)
    {
        $info->delete();
        return redirect()->route('infos.index');
    }
}
