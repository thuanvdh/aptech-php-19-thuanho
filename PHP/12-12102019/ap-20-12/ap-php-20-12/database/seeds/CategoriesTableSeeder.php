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
        for ($i=1 ; $i < 5 ; $i++) {
            Category::create(
            [
                'name'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
                'des'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            ]
            );
                }
    }
}
