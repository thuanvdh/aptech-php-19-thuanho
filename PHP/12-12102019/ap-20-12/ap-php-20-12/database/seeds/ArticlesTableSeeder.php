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
        for ($i=1 ; $i < 10 ; $i++) {
            Article::create(
            [
                'title'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
                'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'content'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'category_id'=>rand(1,4),
            ]
            );
    }
}
}