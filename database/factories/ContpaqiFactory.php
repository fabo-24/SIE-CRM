<?php

namespace Database\Factories;

use App\Models\Contpaqi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContpaqiFactory extends Factory
{
    protected $model = Contpaqi::class;

    public function definition()
    {
        return [
			'cliente' => $this->faker->name,
			'NoSerie' => $this->faker->name,
			'FechaCaducidad' => $this->faker->name,
			'Sistemas' => $this->faker->name,
			'Licencia' => $this->faker->name,
			'Usuarios' => $this->faker->name,
			'Vendedor' => $this->faker->name,
			'Certificado' => $this->faker->name,
        ];
    }
}
