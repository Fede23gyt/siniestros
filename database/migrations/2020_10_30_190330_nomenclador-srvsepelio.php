<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NomencladorSrvsepelio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srvsepelio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_id');
            $table->bigInteger('cod_jake');
            $table->bigInteger('cert_sql');
            $table->date('fecha');
            $table->unsignedBigInteger('agencia_id');
            $table->unsignedBigInteger('cobertura_id');
            $table->string('fall_nombre',60);
            $table->bigInteger('fall_dni');
            $table->bigInteger('fall_edad');
            $table->unsignedBigInteger('est_civil_id');
            $table->string('fall_nacion',60);
            $table->string('fall_lugnac',60);
            $table->date('fall_fecha');
            $table->string('fall_lugar',60);
            $table->string('fall_causa1',60);
            $table->string('fall_causa2',60);
            $table->string('fall_causa3',60);
            $table->unsignedBigInteger('vinculo_id');
            $table->unsignedBigInteger('plan_id');
            $table->date('afil_fecha');
            $table->bigInteger('afil_mesespag');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('vendedor_id');
            $table->unsignedBigInteger('autorizador_id');
            $table->date('fec_aut');
            $table->bigInteger('denun_siniestro');
            $table->bigInteger('recibo_luto');
            $table->bigInteger('recibo_subsidio');
            $table->bigInteger('seguro_vida');
            $table->unsignedBigInteger('estado_auto_id');
            $table->timestamps();
            //CLAVES FORANEAS
            $table->foreign('tipo_id')->references('id')->on('tipo_servicio');
            $table->foreign('agencia_id')->references('id')->on('agencias');
            $table->foreign('cobertura_id')->references('id')->on('coberturas');
            $table->foreign('est_civil_id')->references('id')->on('estado_civil');
            $table->foreign('vinculo_id')->references('id')->on('vinculos');
            $table->foreign('plan_id')->references('id')->on('planes');
            $table->foreign('vendedor_id')->references('id')->on('vendedores');
            $table->foreign('autorizador_id')->references('id')->on('autorizadores');
            $table->foreign('estado_auto_id')->references('id')->on('estado_autorizacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('srvsepelio');
    }
}
