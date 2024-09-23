<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;  // Make sure to import the Article model

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            ['name' => 'Milk', 'price' => 1.15],
            ['name' => 'Bread', 'price' => 1.00],
            ['name' => 'Eggs', 'price' => 2.50],
            ['name' => 'Cheese', 'price' => 3.25],
            ['name' => 'Apples', 'price' => 1.75],
            ['name' => 'Bananas', 'price' => 1.20],
            ['name' => 'Chicken', 'price' => 6.50],
            ['name' => 'Rice', 'price' => 2.00],
            ['name' => 'Pasta', 'price' => 1.80],
            ['name' => 'Yogurt', 'price' => 1.35],
            ['name' => 'Butter', 'price' => 2.75],
            ['name' => 'Orange Juice', 'price' => 3.00],
            ['name' => 'Coffee', 'price' => 4.25],
            ['name' => 'Sugar', 'price' => 1.90],
            ['name' => 'Tomatoes', 'price' => 2.30],
        ];

        // Insert each article into the database using Eloquent
        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
