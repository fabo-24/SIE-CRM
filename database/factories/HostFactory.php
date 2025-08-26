<?php

namespace Database\Factories;

use App\Models\Host;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HostFactory extends Factory
{
    protected $model = Host::class;

    public function definition()
    {
        return [
			'Correo' => $this->faker->name,
			'Contraseña' => $this->faker->name,
			'Vencimiento' => $this->faker->name,
			'Plan' => $this->faker->name,
        ];
    }
}
