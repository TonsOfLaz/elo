<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Label;

class LabelTableSeeder extends Seeder 
{

    public function run()  
    {  
        $faker = Faker\Factory::create();

        Label::truncate();

        foreach(range(1,20) as $index)  
        {  
            Label::create([  
                'name' => $faker->catchPhrase,
				'user_id' => $faker->numberBetween($min = 1, $max = 20),
				
            ]);  
        }
    }
} 
// Faker reference: https://github.com/fzaninotto/Faker