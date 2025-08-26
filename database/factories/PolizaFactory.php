<?php

namespace Database\Factories;

use App\Models\Poliza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PolizaFactory extends Factory
{
    protected $model = Poliza::class;

    public function definition()
    {
        return [
			'cliente' => $this->faker->name,
			'contacto' => $this->faker->name,
			'fecha_inicio' => $this->faker->name,
			'fecha_fin' => $this->faker->name,
			'bloques_contratados' => $this->faker->name,
			'bloques_disponibles' => $this->faker->name,
			'estado' => $this->faker->name,
			'observaciones' => $this->faker->name,
        ];
    }
}
