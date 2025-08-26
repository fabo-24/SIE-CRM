<?php

namespace Database\Factories;

use App\Models\Contribuyente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContribuyenteFactory extends Factory
{
    protected $model = Contribuyente::class;

    public function definition()
    {
        return [
			'RFC' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Regimen' => $this->faker->name,
			'Email' => $this->faker->name,
			'Telefono' => $this->faker->name,
			'Factura_contraseña' => $this->faker->name,
			'Nomina_contraseña' => $this->faker->name,
			'Vencimiento_CSD' => $this->faker->name,
			'Ciec_contraseña' => $this->faker->name,
			'Fiel_contraseña' => $this->faker->name,
			'Vencimiento_fiel' => $this->faker->name,
			'Ev_imss_usuario' => $this->faker->name,
			'Ev_imss_contraseña' => $this->faker->name,
			'Idse_usuario' => $this->faker->name,
			'Idse_contraseña' => $this->faker->name,
			'Sipare_usuario' => $this->faker->name,
			'Sipare_contraseña' => $this->faker->name,
			'Usuario_2' => $this->faker->name,
			'Contraseña_2' => $this->faker->name,
			'Colabora_usuario' => $this->faker->name,
			'Colabora_contraseña' => $this->faker->name,
			'Infonavit_usuario' => $this->faker->name,
			'Infonavit_contraseña' => $this->faker->name,
			'Citas_jal_usuario' => $this->faker->name,
			'Citas_jal_contraseña' => $this->faker->name,
			'Sas_usuario' => $this->faker->name,
			'Sas_contraseña' => $this->faker->name,
			'Extra' => $this->faker->name,
        ];
    }
}
