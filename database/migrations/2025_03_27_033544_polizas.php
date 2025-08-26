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
         Schema::create('polizas', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('contacto')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->decimal('bloques_contratados', 8, 2)->default(0);
            $table->decimal('bloques_disponibles', 8, 2)->default(0);
            $table->string('estado')->default('activa'); // activa, finalizada, cancelada
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('polizas');
    }
};
