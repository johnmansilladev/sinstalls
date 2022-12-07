<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento', function (Blueprint $table) {
            $table->bigIncrements('mov_id');
            $table->unsignedBigInteger('mov_tope_id');
            $table->date('mov_fecha');
            $table->integer('mov_idCuentaOrigen');
            $table->integer('mov_idCuentaDestino');
            $table->string('mov_codigoTransferencia', 25);
            $table->string('mov_observaciones');
            $table->timestamps();
            $table->foreign('mov_tope_id')->references('tope_id')->on('tipo_operacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimiento');
    }
};
