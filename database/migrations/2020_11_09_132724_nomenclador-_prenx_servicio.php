<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorPrenxServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prnxservicio', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('srvsep_id');
          $table->unsignedBigInteger('prenecesidad_id');
          $table->date('fec_uso');
          $table->date('fec_negocia');
          $table->timestamps();

          $table->foreign('srvsep_id')->references('id')->on('srvsepelio');
          $table->foreign('prenecesidad_id')->references('id')->on('prenecesidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prnxservicio');
    }
}
