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
        Schema::create('cuenta_plataforma', function (Blueprint $table) {
            $table->bigIncrements('cuentPlat_id');
            $table->unsignedBigInteger('cuentPlat_plat_id');
            $table->unsignedBigInteger('cuentPlat_tar_id');
            $table->string('cuentPlat_nombre');
            $table->string('cuentPlat_correo', 100);
            $table->string('cuentPlat_password', 100);
            $table->char('cuentPlat_moneda', 1);
            $table->timestamps();
            $table->foreign('cuentPlat_plat_id')->references('plat_id')->on('plataforma');
            $table->foreign('cuentPlat_tar_id')->references('tar_id')->on('tarjeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_plataforma');
    }
};
