<?php

use App\Models\FeatureUsage;
use Illuminate\Support\Facades\Auth;

function logFeatureUsage($featureName, $action = null) {
    FeatureUsage::create([
        'user_id' => Auth::id(),
        'feature_name' => $featureName,
        'action' => $action,
        'ip_address' => request()->ip(),
    ]);
}
