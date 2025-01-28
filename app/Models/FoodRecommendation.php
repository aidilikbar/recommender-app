<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodRecommendation extends Model
{
    use HasFactory;

    protected $table = 'recipes'; // Mapping the table name
    protected $fillable = ['recipe_name', 'ingredients', 'instructions']; // Mass-assignable fields
}