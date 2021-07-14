<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMediosPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_medios_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('Moneda');
            $table->string('Pago_Fisico');
            $table->string('Tarjeta');
            $table->text('Banco');
            $table->string('Pago_Internet');
            $table->string('Pago_App_Movil');
            $table->integer('Valor');
            $table->text('imagen')->nullable();
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
        Schema::dropIfExists('tb_medios_pagos');
    }
}
