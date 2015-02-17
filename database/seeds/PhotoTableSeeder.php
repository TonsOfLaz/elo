<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Photo;

class PhotoTableSeeder extends Seeder 
{

    public function run()  
    {  
        $faker = Faker\Factory::create();

        Photo::truncate();

        foreach(range(1,200) as $index)  
        {  
            Photo::create([  
                'file' => $faker->imageUrl($width = 800, $height = 600),
				'height' => $faker->numberBetween($min = 600, $max = 600),
				'width' => $faker->numberBetween($min = 800, $max = 800),
				'date' => $faker->dateTimeThisYear($max = 'now'),
				'album_id' => $faker->numberBetween($min = 1, $max = 50),
				
            ]);  
        }
    }
} 
// Faker reference: https://github.com/fzaninotto/Faker