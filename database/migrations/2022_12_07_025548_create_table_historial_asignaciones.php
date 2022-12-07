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
        Schema::create('historial_asignaciones', function (Blueprint $table) {
            $table->bigIncrements('histAsi_id');
            $table->unsignedBigInteger('histAsi_inst_id');
            $table->integer('histAsi_instalador_id');
            $table->integer('histAsi_asignador_id');
            $table->tinyInteger('histAsi_estadoInstalacion_id');
            $table->dateTime('histAsi_fecha');
            $table->longText('histAsi_recomendaciones')->nullable();
            $table->timestamps();
            $table->foreign('histAsi_inst_id')->references('inst_id')->on('instalacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_asignaciones');
    }
};
