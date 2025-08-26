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
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();  
            $table->string('RFC', 13);
            $table->text('Nombre');
            $table->text('Regimen');
            $table->text('Email')->nullable();
            $table->string('Telefono', 10)->nullable();
            $table->string('Factura_contraseña', 55)->nullable();
            $table->string('Nomina_contraseña', 55)->nullable();
            $table->date('Vencimiento_CSD')->nullable();
            $table->string('Ciec_contraseña', 55)->nullable();
            $table->string('Fiel_contraseña', 55)->nullable();
            $table->date('Vencimiento_fiel')->nullable();
            $table->string('Ev_imss_usuario', 100)->nullable();
            $table->string('Ev_imss_contraseña', 100)->nullable();
            $table->string('Idse_usuario', 100)->nullable();
            $table->string('Idse_contraseña', 100)->nullable();
            $table->string('Sipare_usuario', 100)->nullable();
            $table->string('Sipare_contraseña', 100)->nullable();
            $table->string('Usuario_2',100)->nullable();
            $table->string('Contraseña_2', 100)->nullable();
            $table->string('Colabora_usuario', 100)->nullable();
            $table->string('Colabora_contraseña', 100)->nullable();
            $table->string('Infonavit_usuario', 100)->nullable();
            $table->string('Infonavit_contraseña',100)->nullable();
            $table->string('Citas_jal_usuario',100)->nullable();
            $table->string('Citas_jal_contraseña',100)->nullable();
            $table->string('Sas_usuario',100)->nullable();
            $table->string('Sas_contraseña',100)->nullable();
            $table->string('Extra')->nullable();
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
        Schema::dropIfExists('contribuyentes');
        $table->dropTimestamps();
    }
};
