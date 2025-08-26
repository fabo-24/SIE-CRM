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
        Schema::create('aspels', function (Blueprint $table) {
            $table->id();
            $table->text('cliente');
            $table->text('CDA');
            $table->text('NoSerie');
            $table->string('Usuario');
            $table->string('Contraseña');
            $table->string('Licenciamiento');
            $table->string('Sistemas');
            $table->string('Timbres');
            $table->string('Observaciones');
            $table->string('RedVpn');
            $table->string('ContraVpn');
            $table->string('FechaCaducidad', 10);
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
        Schema::dropIfExists('aspels');
    }
};
