<?php

namespace Database\Factories;

use App\Models\Companie;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'company_id'=>Companie::all()->random()->id,
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),



        ];
    }
}
