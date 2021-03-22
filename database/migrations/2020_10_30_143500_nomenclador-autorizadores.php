<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorAutorizadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorizadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ayno',60);
            $table->integer('nivel');
            $table->string('telefono1',15);
            $table->string('telefono2',15);
            $table->string('mail',50);
            $table->string('observaciones',100);
            $table->integer('estado');
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
        Schema::dropIfExists('autorizadores');
    }
}
