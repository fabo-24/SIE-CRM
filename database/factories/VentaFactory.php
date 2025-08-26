<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VentaFactory extends Factory
{
    protected $model = Venta::class;

    public function definition()
    {
        return [
			'Cliente' => $this->faker->name,
			'Fecha' => $this->faker->name,
			'Contacto' => $this->faker->name,
			'Actividad' => $this->faker->name,
			'ProcesoActividad' => $this->faker->name,
			'Vendedor' => $this->faker->name,
			'Asesor' => $this->faker->name,
			'Costo' => $this->faker->name,
			'Factura' => $this->faker->name,
			'Poliza' => $this->faker->name,
			'Horario' => $this->faker->name,
			'Sistemas' => $this->faker->name,
			'Soporte' => $this->faker->name,
			'Contabilidad' => $this->faker->name,
			'Programacion' => $this->faker->name,
			'Diseño' => $this->faker->name,
			'MKT' => $this->faker->name,
			'Nom' => $this->faker->name,
			'Equipo' => $this->faker->name,
			'Antiviru' => $this->faker->name,
			'Curso' => $this->faker->name,
			'PostVenta' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
