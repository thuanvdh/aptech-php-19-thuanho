<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categoryIDsArray = [1, 2, 3, 4, 5];
        // dd(array_random($categoryIDsArray));
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                "title" => $faker->sentence($nbWords = 3, $variableNbWords = true),
                "description" => $faker->sentence($nbWords = 12, $variableNbWords = true),
                "content" => $faker->sentence($nbWords = 20, $variableNbWords = true),
                "category_id" => array_random($categoryIDsArray)
            ]);
        }
    }
}
