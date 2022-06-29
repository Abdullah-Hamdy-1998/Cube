<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $shipments = Shipment::with('shipmentable')->orderBy('created_at', 'desc')->limit(5)->get();

        $logs = ActivityLog::with(['user', 'loggable'])->orderBy('created_at', 'desc')->limit(5)->get();

        return view('pages.home', ['shipments' => $shipments, 'logs' => $logs]);
    }
}
