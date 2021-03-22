<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorBeneficiariosPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios_pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ayno',100);
            $table->bigInteger('dni');
            $table->smallInteger('edad');
            $table->decimal('importe');
            $table->unsignedBigInteger('vinculo_id');
            $table->unsignedBigInteger('tipopago_id');
            $table->unsignedBigInteger('denuncia_id');
            $table->unsignedBigInteger('subsidio_id');

            $table->foreign('vinculo_id')->references('id')->on('vinculos');
            $table->foreign('tipopago_id')->references('id')->on('tipo_pagos');
            $table->foreign('denuncia_id')->references('id')->on('densiniestros');
            $table->foreign('subsidio_id')->references('id')->on('subsidio_luto');

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
        Schema::dropIfExists('beneficiarios_pagos');
    }
}
