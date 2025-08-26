<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->text('Cliente')->nullable();
            $table->text('Fecha')->nullable();
            $table->text('Contacto')->nullable();
            $table->text('Actividad')->nullable();    
            $table->text('ProcesoActividad')->nullable();
            $table->text('Vendedor')->nullable();
            $table->text('Asesor')->nullable();
            $table->text('Costo')->nullable();
            $table->text('Factura')->nullable();
            $table->text('Poliza')->nullable();
            $table->text('Horario')->nullable();
            $table->text('Sistemas')->nullable();
            $table->text('Soporte')->nullable();
            $table->text('Contabilidad')->nullable();
            $table->text('Programacion')->nullable();
            $table->text('Diseño')->nullable();
            $table->text('MKT')->nullable();
            $table->text('Nom')->nullable();
            $table->text('Equipo')->nullable();
            $table->text('Antiviru')->nullable();
            $table->text('Curso')->nullable();
            $table->text('PostVenta')->nullable();
            $table->string('status')->nullable();
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
