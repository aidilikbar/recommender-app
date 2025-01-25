<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HealthRecordsService
{
    public function getHealthRecords()
    {
        $url = "https://pp-app-6wie9.ondigitalocean.app/api/health-records";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        \Log::error('Health Records API Error: ' . $response->body());
        return null;
    }
}