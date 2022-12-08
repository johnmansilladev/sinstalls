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
        Schema::create('informe', function (Blueprint $table) {
            $table->bigIncrements('inf_id');
            $table->unsignedBigInteger('inf_ven_id');
            $table->integer('inf_lider_id');
            $table->date('inf_fecha');
            $table->string('inf_descripcion');
            $table->string('inf_documentoAdj');
            $table->timestamps();
            $table->foreign('inf_ven_id')->references('ven_id')->on('venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe');
    }
};
