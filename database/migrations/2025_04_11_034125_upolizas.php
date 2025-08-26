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
        Schema::create('upolizas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poliza_id')->constrained('polizas')->onDelete('cascade');
            $table->date('fecha')->nullable();
            $table->time('inicio')->nullable();
            $table->time('fin')->nullable();
            $table->time('duracion')->nullable();
            $table->time('ajuste')->nullable();
            $table->string('caso')->nullable(); // descripción del soporte
            $table->decimal('bloques_consumidos', 8, 2)->default(0);
            $table->decimal('descuento', 8, 2)->default(0);
            $table->string('atendio')->nullable();
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
        Schema::dropIfExists('upolizas');
    }
};
