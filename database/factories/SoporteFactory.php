<?php

namespace Database\Factories;

use App\Models\Soporte;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SoporteFactory extends Factory
{
    protected $model = Soporte::class;

    public function definition()
    {
        return [
			'Fecha_ini' => $this->faker->name,
			'Fecha_fin' => $this->faker->name,
			'Hora_ini' => $this->faker->name,
			'Hora_fin' => $this->faker->name,
			'Tiempo' => $this->faker->name,
			'Cliente' => $this->faker->name,
			'Asunto' => $this->faker->name,
			'Ejecutivo' => $this->faker->name,
			'Stat' => $this->faker->name,
			'Evidencia' => $this->faker->name,
			'PostVenta' => $this->faker->name,
			'Sistema' => $this->faker->name,
			'Comentarios' => $this->faker->name,
			'VersionSistem' => $this->faker->name,
			'VersionWindows' => $this->faker->name,
			'PaqueteriaOffice' => $this->faker->name,
			'Status' => $this->faker->name,
        ];
    }
}
