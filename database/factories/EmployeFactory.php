<?php

namespace Database\Factories;
use Database\Factories\EmployeeFactory;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
class EmployeFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->randomNumber(11),
            'amount' => $this->faker->randomNumber(5),
        ];
    }
}