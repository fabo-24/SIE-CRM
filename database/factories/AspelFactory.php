<?php

namespace Database\Factories;

use App\Models\Aspel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AspelFactory extends Factory
{
    protected $model = Aspel::class;

    public function definition()
    {
        return [
			'cliente' => $this->faker->name,
			'CDA' => $this->faker->name,
			'NoSerie' => $this->faker->name,
			'Usuario' => $this->faker->name,
			'Contraseña' => $this->faker->name,
			'Licenciamiento' => $this->faker->name,
			'Sistemas' => $this->faker->name,
			'Timbres' => $this->faker->name,
			'Observaciones' => $this->faker->name,
			'RedVpn' => $this->faker->name,
			'ContraVpn' => $this->faker->name,
			'FechaCaducidad' => $this->faker->name,
        ];
    }
}
