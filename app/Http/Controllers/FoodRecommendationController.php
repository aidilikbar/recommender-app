<?php

namespace App\Http\Controllers;

use App\Models\FoodRecommendation;

class FoodRecommendationController extends Controller
{
    public function index()
    {
        // Retrieve all food recommendations
        $foodRecommendations = FoodRecommendation::all();
        return view('food-recommendation', compact('foodRecommendations'));
    }
}