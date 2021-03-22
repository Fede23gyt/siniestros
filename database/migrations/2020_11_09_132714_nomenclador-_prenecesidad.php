<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorPrenecesidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenecesidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('certificado');
            $table->decimal('valor');
            $table->integer('estado');    //0-Sin utilziar 1-utilizado 2-Negociado
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
        Schema::dropIfExists('prenecesidad');
    }
}
