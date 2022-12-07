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
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->bigIncrements('detVent_id');
            $table->unsignedBigInteger('detVent_ven_id');
            $table->unsignedBigInteger('detVent_serv_id');
            $table->unsignedBigInteger('detVent_verSf_id');
            $table->tinyInteger('detVent_numeroPc')->nullable();
            $table->double('detVent_precio', 6,2);
            $table->double('detVent_dcto', 6,2)->nullable();
            $table->timestamps();
            $table->foreign('detVent_ven_id')->references('ven_id')->on('venta');
            $table->foreign('detVent_serv_id')->references('serv_id')->on('servicio');
            $table->foreign('detVent_verSf_id')->references('verSf_id')->on('version_software');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
};
