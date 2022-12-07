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
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('ven_id');
            $table->unsignedBigInteger('ven_cli_id');
            $table->unsignedBigInteger('ven_user_id');
            $table->unsignedBigInteger('ven_age_id');
            $table->unsignedBigInteger('ven_mov_id')->nullable();
            $table->string('ven_correlativo');
            $table->char('ven_tipo', 1);
            $table->double('ven_total');
            $table->dateTime('ven_fecha');
            $table->tinyInteger('ven_numeroPcs');
            $table->char('ven_estado', 1);
            $table->timestamps();
            $table->foreign('ven_cli_id')->references('cli_id')->on('cliente');
            $table->foreign('ven_user_id')->references('id')->on('users');
            $table->foreign('ven_age_id')->references('age_id')->on('agente');
            $table->foreign('ven_mov_id')->references('mov_id')->on('movimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};
