<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    public function __invoke()
    {
        $this->authorize('read-reports');

        $logs = ActivityLog::with(['user', 'loggable'])->get();

        return view('pages.reports.index', ['logs' => $logs]);
    }
}
