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
        Schema::create('agente', function (Blueprint $table) {
            $table->bigIncrements('age_id');
            $table->unsignedBigInteger('age_canv_id');
            $table->unsignedBigInteger('age_bra_id');
            $table->string('age_nombre', 50);
            $table->string('age_numberID', 25);
            $table->timestamps();
            $table->foreign('age_canv_id')->references('canv_id')->on('canal_venta');
            $table->foreign('age_bra_id')->references('bra_id')->on('brand');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agente');
    }
};
