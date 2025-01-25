<?php

namespace App\Http\Controllers;

use App\Services\HealthRecordsService;
use App\Services\MonitoringDataService;
use App\Services\DecisionSupportService;

class HealthStatusController extends Controller
{
    public function index(
        HealthRecordsService $healthRecordsService,
        MonitoringDataService $monitoringDataService,
        DecisionSupportService $decisionSupportService
    ) {
        // Fetch data from APIs
        $healthRecords = $healthRecordsService->getHealthRecords();
        $monitoringData = $monitoringDataService->getMonitoringData();
        $decisionSupport = $decisionSupportService->getDecisionSupport();

        // Debug the health records data
        //dd($monitoringData);

        // Pass data to the view
        return view('health-status', compact('healthRecords', 'monitoringData', 'decisionSupport'));
    }
}