<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Album;

class AlbumTableSeeder extends Seeder 
{

    public function run()  
    {  
        $faker = Faker\Factory::create();

        Album::truncate();

        foreach(range(1,50) as $index)  
        {  
            Album::create([  
                'type' => $faker->randomElement($array = array ('Instagram','Local','Web')),
				'name' => $faker->company,
				'public' => $faker->boolean,
				'user_id' => $faker->numberBetween($min = 1, $max = 20),
				
            ]);  
        }
    }
} 
// Faker reference: https://github.com/fzaninotto/Faker