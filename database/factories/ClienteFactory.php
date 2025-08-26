<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
			'RazonSocial' => $this->faker->name,
			'Contacto' => $this->faker->name,
			'Numero' => $this->faker->name,
			'WhatsApp' => $this->faker->name,
			'Correo' => $this->faker->name,
			'Contacto2' => $this->faker->name,
			'Numero2' => $this->faker->name,
			'Observacion' => $this->faker->name,
        ];
    }
}
