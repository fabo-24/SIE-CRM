<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Role::create(['name' => 'Administrador']);
    Role::create(['name' => 'Soporte']);
    Role::create(['name' => 'Ventas']);
    Role::create(['name' => 'Contabilidad']);
    }
}
