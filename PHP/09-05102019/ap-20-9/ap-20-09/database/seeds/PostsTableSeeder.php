<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
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
            DB::table('posts')->insert(
            ['title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description'=>$faker->text($maxNbChars = 50) ]
            );
        }
     }       
}
