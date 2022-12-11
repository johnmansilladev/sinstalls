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
        Schema::create('historial_recarga', function (Blueprint $table) {
            $table->bigIncrements('hrec_id');
            $table->unsignedBigInteger('hrec_chip_id');
            $table->float('hrec_monto', 4,2);
            $table->dateTime('hrec_fecha');
            $table->integer('hrec_user_id');
            $table->timestamps();
            $table->foreign('hrec_chip_id')->references('chip_id')->on('chip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_recarga');
    }
};
