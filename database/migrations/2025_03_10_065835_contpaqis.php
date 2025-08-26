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
        Schema::create('contpaqis', function (Blueprint $table) {
            $table->id();
            $table->text('cliente');
            $table->text('NoSerie');
            $table->string('FechaCaducidad', 10);
            $table->text('Sistemas');
            $table->text('Licencia');
            $table->text('Usuarios');
            $table->text('Vendedor');
            $table->text('RedVpn')->nullable();
            $table->text('ContraVpn')->nullable();
            $table->string('Certificado');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contpaqis');

    }
};
