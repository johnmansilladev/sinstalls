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
        Schema::create('software_servicio', function (Blueprint $table) {
            $table->bigIncrements('softServ_id');
            $table->unsignedBigInteger('softServ_serv_id');
            $table->unsignedBigInteger('softServ_soft_id');
            $table->double('softServ_precio', 6,2);
            $table->timestamps();
            $table->foreign('softServ_serv_id')->references('serv_id')->on('servicio');
            $table->foreign('softServ_soft_id')->references('soft_id')->on('software');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_servicio');
    }
};
