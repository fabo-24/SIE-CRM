<?php

namespace Database\Factories;

use App\Models\Amenaza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AmenazaFactory extends Factory
{
    protected $model = Amenaza::class;

    public function definition()
    {
        return [
			'Antivitus' => $this->faker->name,
			'ClienteAnt' => $this->faker->name,
			'FechaCaducidad' => $this->faker->name,
			'Equipos' => $this->faker->name,
			'Licencias' => $this->faker->name,
        ];
    }
}
