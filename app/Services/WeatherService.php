<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function getCurrentWeather($city)
    {
        $url = "https://weather-app-sigma-nine-96.vercel.app/weather/current?city={$city}";
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            // Simplify the response to only necessary fields
            return [
                'temperature' => $data['main']['temp'] - 273.15, // Convert Kelvin to Celsius
                'condition' => $data['weather'][0]['description'],
                'wind_speed' => $data['wind']['speed'],
            ];
        }

        // Log the error if the response is not successful
        \Log::error('Weather API Error: ' . $response->body());

        return null; // Handle failure
    }
}