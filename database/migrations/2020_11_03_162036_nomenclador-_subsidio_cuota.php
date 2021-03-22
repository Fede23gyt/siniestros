<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorSubsidioCuota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidio_cuota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prove_flex'); /// Proveedor local al que se emite la factura
            $table->integer('nro_cuota');
            $table->decimal('impo_cuota');
            $table->date('fecha_emi');
            $table->date('fecha_pag');
            $table->unsignedBigInteger('srvsepelio_id');
            $table->unsignedBigInteger('beneficiario_id');
            $table->timestamps();

            $table->foreign('srvsepelio_id')->references('id')->on('srvsepelio');
            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios_pagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsidio_cuota');
    }
}
