<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorSubsidioLuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidio_luto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('srvsepelio_id');
            $table->decimal('importe');
            $table->date('fecha_emi');
            $table->date('fech_pago');
            $table->unsignedBigInteger('proveflex_id');
            $table->timestamps();

            $table->foreign('srvsepelio_id')->references('id')->on('srvsepelio');
            $table->foreign('proveflex_id')->references('id')->on('prove_flex');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsidio_luto');
    }
}
