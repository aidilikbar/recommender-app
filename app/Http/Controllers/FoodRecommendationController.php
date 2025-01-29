<?php

namespace App\Http\Controllers;

use App\Models\FoodRecommendation;

class FoodRecommendationController extends Controller
{
    public function index()
    {
        // Retrieve all food recommendations
        $recommendations = FoodRecommendation::all();
        return view('food-recommendation', compact('recommendations'));
    }
}