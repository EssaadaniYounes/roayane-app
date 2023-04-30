<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    protected $model = Employe::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'registration_number' => $this->faker->randomNumber(9, true),
            'full_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'depart' => $this->faker->word(),
            'hire_date' => $this->faker->date(),
            'phone' => $this->faker->randomNumber(9, true),
            'address' => $this->faker->address(),
            'city' => $this->faker->state(),
        ];
    }
}
