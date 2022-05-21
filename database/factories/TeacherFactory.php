<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'tsc_number'=>$this->faker->unique()->numerify('#######')
        ];
    }
}
