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
        Schema::create('interfaces_software', function (Blueprint $table) {
            $table->bigIncrements('softIn_id');
            $table->unsignedBigInteger('softIn_soft_id');
            $table->unsignedBigInteger('softIn_int_id');
            $table->timestamps();
            $table->foreign('softIn_soft_id')->references('soft_id')->on('software');
            $table->foreign('softIn_int_id')->references('int_id')->on('interfaz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interfaces_software');
    }
};
