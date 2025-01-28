<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'recipe_name' => 'Berry Protein Smoothie',
                'ingredients' => 'Pea/Whey Protein, Frozen Mixed Berries, Blueberries, Almond Milk, Banana (optional)',
                'instructions' => 'Blend all ingredients until smooth. Serve chilled.',
            ],
            [
                'recipe_name' => 'Tropical Fruit Salad',
                'ingredients' => 'Pineapple (diced), Melon, Banana (sliced), Grapes w skin, Lemon juice',
                'instructions' => 'Mix fruits in a bowl and drizzle with lemon juice. Chill before serving.',
            ],
            [
                'recipe_name' => 'Citrus Delight Salad',
                'ingredients' => 'Orange (segmented), Grapefruit (segmented), Manderin (segmented), Cranberries fresh, Honey',
                'instructions' => 'Combine citrus fruits, top with cranberries and honey.',
            ],
            [
                'recipe_name' => 'Berry Citrus Smoothie',
                'ingredients' => 'Strawberries, Redcurrants, Orange juice, Whey Protein, Yogurt',
                'instructions' => 'Blend all ingredients and serve immediately.',
            ],
            [
                'recipe_name' => 'Dried Fruit & Nut Mix',
                'ingredients' => 'Raisins dried, Apricots dried, Cranberries fresh, Almonds or Walnuts (optional)',
                'instructions' => 'Mix ingredients in a bowl. Store in an airtight container.',
            ],
            [
                'recipe_name' => 'Summer Berry Bowl',
                'ingredients' => 'Blackberries, Bilberries, Raspberries, Gooseberries, Chia seeds',
                'instructions' => 'Combine berries in a bowl, sprinkle chia seeds. Let sit for 10 minutes.',
            ],
            [
                'recipe_name' => 'Apricot Peach Smoothie',
                'ingredients' => 'Apricots w skin, Peach wo skin (sliced), Pea Protein, Almond Milk',
                'instructions' => 'Blend all ingredients until smooth. Serve cold.',
            ],
            [
                'recipe_name' => 'Mandarin Strawberry Parfait',
                'ingredients' => 'Manderin (segmented), Strawberries (sliced), Greek yogurt, Honey',
                'instructions' => 'Layer yogurt, mandarin, and strawberries in a glass. Drizzle with honey.',
            ],
            [
                'recipe_name' => 'Mixed Berry Syrup Dessert',
                'ingredients' => 'Strawberries in syrup (tinned), Apricots in syrup (tinned), Blackcurrants',
                'instructions' => 'Mix all ingredients. Serve over ice cream or pancakes.',
            ],
            [
                'recipe_name' => 'Cranberry Citrus Detox Water',
                'ingredients' => 'Cranberries fresh, Lemon (sliced), Orange (sliced), Water',
                'instructions' => 'Combine all ingredients in a pitcher. Refrigerate for 2 hours.',
            ],
        ]);
    }
}
