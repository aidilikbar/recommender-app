<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DecisionSupportService
{
    public function getDecisionSupport()
    {
        $url = "https://cds-app-89thh.ondigitalocean.app/api/decision-support";
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        \Log::error('Decision Support API Error: ' . $response->body());
        return null;
    }
}