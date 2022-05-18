<?php

namespace App\Http\Controllers;

use App\Models\ShipmentInfo;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ShipmentInfoController extends Controller
{

    public function index()
    {
        $this->authorize('read-data');
        $shipments_info = ShipmentInfo::all();
        return view('pages.shipments-info.index', ['shipments_info' => $shipments_info]);
    }

    public function create()
    {
        $this->authorize('write-data');
        return view('pages.shipments-info.create');
    }

    public function store(Request $request)
    {
        $this->authorize('write-data');
        ShipmentInfo::create($request->all());
        return  redirect()->route('infos.index');
    }

    public function show(ShipmentInfo $info)
    {
        $this->authorize('read-data');
        return view('pages.shipments-info.show', ['shipment_info' => $info]);
    }

    public function edit(ShipmentInfo $info)
    {
        $this->authorize('write-data');
        return view('pages.shipments-info.edit', ['shipment_info' => $info]);
    }

    public function update(Request $request, ShipmentInfo $info)
    {
        $this->authorize('write-data');
        $info->update($request->all());
        return redirect()->route('infos.index');
    }

    public function destroy(ShipmentInfo $info)
    {
        $this->authorize('write-data');
        $info->delete();
        return redirect()->route('infos.index');
    }
}
