<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

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
        for ($i=1 ; $i < 10 ; $i++) {
            User::insert(
            [
                'name'=> $faker->name($gender ='male'|'female'),
                'email'=>$faker->email,
                'password'=>'12345',
            ]
            );
        
    }
}
}
