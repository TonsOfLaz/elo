<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder 
{

    public function run()  
    {  
        $faker = Faker\Factory::create();

        User::truncate();

        foreach(range(1,20) as $index)  
        {  
            User::create([  
                'name' => $faker->name,
				'email' => $faker->email,
				'password' => $faker->userName,
				
            ]);  
        }
    }
} 
// Faker reference: https://github.com/fzaninotto/Faker