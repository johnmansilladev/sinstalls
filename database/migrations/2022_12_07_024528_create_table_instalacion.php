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
        Schema::create('instalacion', function (Blueprint $table) {
            $table->bigIncrements('inst_id');
            $table->unsignedBigInteger('inst_detVent_id')->nullable(); //Puede ser nulo debido a que se pueden generar una nueva instalacion sin estar relacionado a una venta
            $table->string('inst_nombre');
            $table->dateTime('inst_fechaProgramada')->nullable();
            $table->dateTime('inst_fechaInicio')->nullable();
            $table->dateTime('inst_fechaFin')->nullable();
            $table->longText('inst_descripcion')->nullable();
            $table->longText('inst_observaciones')->nullable();
            $table->char('inst_estado', 1);
            $table->string('inst_appRemoteAccess', 35);
            $table->string('inst_conexionIdRA', 12);
            $table->string('inst_passwordRA', 12);
            $table->timestamps();
            $table->foreign('inst_detVent_id')->references('detVent_id')->on('detalle_venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instalacion');
    }
};
