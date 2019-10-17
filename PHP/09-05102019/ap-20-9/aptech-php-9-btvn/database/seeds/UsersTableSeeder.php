<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=1 ; $i < 8 ; $i++) {
            DB::table('users')->insert(
            [
                'name'=> $faker->name($gender ='male'|'female'),
                'email'=>$faker->email,
                'password'=>$faker->password,
            ]
            );
        }
    }
}
