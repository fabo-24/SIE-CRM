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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('RazonSocial')->nullable();
            $table->string('Contacto')->nullable();
            $table->string('Numero')->nullable();
            $table->string('WhatsApp')->nullable();
            $table->string('Correo')->nullable();
            $table->string('Contacto2')->nullable();
            $table->string('Numero2')->nullable();
            $table->string('Observacion')->nullable();
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
        Schema::dropIfExists('clientes');
    }
};
