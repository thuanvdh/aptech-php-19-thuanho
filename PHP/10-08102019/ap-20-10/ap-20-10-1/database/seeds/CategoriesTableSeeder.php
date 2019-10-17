<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            DB::table('categories')->insert(
            [
                'name'=> $faker->sentence($nbWords = 2, $variableNbWords = true),
                
            ]
            );
    }
}
}