<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numberBetween(0, 1000),
            'name' => $this->faker->word(15),
            'lastname' => $this->faker->word(20),
            'identification_card' => $this->faker->numberBetween(0, 1000),
            'role_id' => Role::all()->random()->id
        ];
    }
}
