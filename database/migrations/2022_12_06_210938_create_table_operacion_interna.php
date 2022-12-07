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
        Schema::create('operacion_interna', function (Blueprint $table) {
            $table->bigIncrements('opeInt_id');
            $table->unsignedBigInteger('opeInt_mov_id');
            $table->unsignedBigInteger('opeInt_user_id');
            $table->date('opeInt_fecha');
            $table->char('opeInt_tipo', 1);
            $table->char('opeInt_estado', 1);
            $table->string('opeInt_observaciones');
            $table->timestamps();
            $table->foreign('opeInt_mov_id')->references('mov_id')->on('movimiento');
            $table->foreign('opeInt_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacion_interna');
    }
};
