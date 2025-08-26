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
        Schema::create('soportes', function (Blueprint $table) {
            $table->id();
            $table->text('Fecha_ini');
            $table->text('Fecha_fin');
            $table->text('Hora_ini');
            $table->text('Hora_fin');
            $table->text('Tiempo');
            $table->text('Cliente');
            $table->text('Asunto');
            $table->text('Ejecutivo');
            $table->text('Stat');
            $table->text('Evidencia')->nullable();
            $table->text('PostVenta')->nullable();
            $table->text('Sistema')->nullable();
            $table->text('Comentarios')->nullable();
            $table->text('VersionSistem')->nullable();
            $table->text('VersionWindows')->nullable();
            $table->text('PaqueteriaOffice')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('soportes');
    }
};
