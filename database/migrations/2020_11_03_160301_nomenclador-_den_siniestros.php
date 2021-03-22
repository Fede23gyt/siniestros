<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorDenSiniestros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('densiniestros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('srvsepelio_id');
            $table->decimal('importe_segu');
            $table->integer('cant_cuotas');
            $table->decimal('importe_vida');
            $table->unsignedBigInteger('convenio_id');
            $table->timestamps();

            $table->foreign('srvsepelio_id')->references('id')->on('srvsepelio');
            $table->foreign('convenio_id')->references('id')->on('convenios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('densiniestros');
    }
}
