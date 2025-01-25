<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MonitoringDataService
{
    public function getMonitoringData()
    {
        $url = "https://rpm-app-g8pdk.ondigitalocean.app/api/monitoring-data";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        \Log::error('Monitoring Data API Error: ' . $response->body());
        return null;
    }
}