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
        Schema::create('chip', function (Blueprint $table) {
            $table->bigIncrements('chip_id');
            $table->char('chip_numero', 9);
            $table->integer('chip_ope_id');
            $table->timestamps();
            $table->foreign('chip_ope_id')->references('ope_id')->on('operador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chip');
    }
};
