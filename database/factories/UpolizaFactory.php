<?php

namespace Database\Factories;

use App\Models\Upoliza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UpolizaFactory extends Factory
{
    protected $model = Upoliza::class;

    public function definition()
    {
        return [
			'poliza_id' => $this->faker->name,
			'fecha' => $this->faker->name,
			'inicio' => $this->faker->name,
			'fin' => $this->faker->name,
			'duracion' => $this->faker->name,
			'ajuste' => $this->faker->name,
			'caso' => $this->faker->name,
			'bloques_consumidos' => $this->faker->name,
			'descuento' => $this->faker->name,
			'atendio' => $this->faker->name,
        ];
    }
}
