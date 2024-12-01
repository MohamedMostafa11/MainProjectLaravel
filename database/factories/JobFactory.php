<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{

    public function definition() : array
    {
        //
        return [

        'employer_id' => Employer::factory(),
        'title' => fake()->jobTitle(),
        'salary' => fake()->numberBetween($min = 10000, $max = 90000),
         //   'created_at' => fake(now()),
         //   'updated_at' => fake(now()),
        ];
    }
}
