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
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('eve_id');
            $table->unsignedBigInteger('eve_inst_id');
            $table->integer('eve_instalador_id');
            $table->dateTime('eve_fecha');
            $table->string('eve_motivo');
            $table->longText('eve_observaciones');
            $table->timestamps();
            $table->foreign('eve_inst_id')->references('inst_id')->on('instalacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
