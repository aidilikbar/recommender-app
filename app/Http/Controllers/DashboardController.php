<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;

class DashboardController extends Controller
{
    public function index(WeatherService $weatherService)
    {
        $city = 'Enschede'; // City for weather API
        $weather = $weatherService->getCurrentWeather($city);

        if (!$weather) {
            \Log::error("Failed to fetch weather data for {$city}");
        }

        // Pass the weather variable to the dashboard view
        return view('dashboard', compact('weather'));
    }
}