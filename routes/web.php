<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureUsageReportController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/report/feature-usage', [FeatureUsageReportController::class, 'index']);
