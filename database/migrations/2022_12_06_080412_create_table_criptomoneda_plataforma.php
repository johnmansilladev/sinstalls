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
        Schema::create('criptomoneda_plataforma', function (Blueprint $table) {
            $table->bigIncrements('cripPlat_id');
            $table->unsignedBigInteger('cripPlat_cript_id');
            $table->unsignedBigInteger('cripPlat_plat_id');
            $table->timestamps();
            $table->foreign('cripPlat_cript_id')->references('cript_id')->on('criptomoneda');
            $table->foreign('cripPlat_plat_id')->references('plat_id')->on('plataforma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criptomoneda_plataforma');
    }
};
