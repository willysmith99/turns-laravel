<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Labor;
use App\Models\Sede;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turno>
 */
class TurnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'labor_id' => Labor::all()->random()->id,
            'empleado_id' => Empleado::all()->random()->id,
            'sede_id' => Sede::all()->random()->id,
            'unidad' => Unidad::all()->random()->name,
            'assistant' => $this->faker->word(20),
            'description' => $this->faker->text(100)
        ];
    }
}
