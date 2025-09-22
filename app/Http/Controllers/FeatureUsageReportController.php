<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeatureUsage;
use Carbon\Carbon;


class FeatureUsageReportController extends Controller
{
    public function index()
    {
        // Group by feature name and count usage in last 30 days
        $usageStats = FeatureUsage::selectRaw('feature_name, count(*) as total')
            ->where('created_at', '>=', Carbon::now()->subDays(30))
            ->groupBy('feature_name')
            ->orderByDesc('total')
            ->get();

        return view('reports.feature_usage', compact('usageStats'));
    }
}
