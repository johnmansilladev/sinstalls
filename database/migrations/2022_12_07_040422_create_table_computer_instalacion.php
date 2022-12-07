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
        Schema::create('computer_instalacion', function (Blueprint $table) {
            $table->bigIncrements('compInst_id');
            $table->unsignedBigInteger('compIns_comp_id');
            $table->unsignedBigInteger('compIns_inst_id');
            $table->timestamps();
            $table->foreign('compIns_comp_id')->references('comp_id')->on('computer');
            $table->foreign('compIns_inst_id')->references('inst_id')->on('instalacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_instalacion');
    }
};
