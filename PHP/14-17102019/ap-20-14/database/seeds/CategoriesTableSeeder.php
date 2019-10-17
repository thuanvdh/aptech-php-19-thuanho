<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Category::create([
                "name" => $faker->sentence($nbWords = 2, $variableNbWords = true),
                "description" => $faker->sentence($nbWords = 12, $variableNbWords = true),
            ]);
        }
        
    }
}
