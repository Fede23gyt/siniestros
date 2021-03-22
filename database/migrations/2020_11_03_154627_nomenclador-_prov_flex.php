<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorProvFlex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prove_flex', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codpro')->unique();
            $table->string('descripcion',100);
            $table->date('fecdes');
            $table->date('fechas');
            $table->unsignedBigInteger('agencia_id');

            $table->foreign('agencia_id')->references('id')->on('agencias');
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
        Schema::dropIfExists('prove_flex');
    }
}
