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
        Schema::create('computer', function (Blueprint $table) {
            $table->bigIncrements('comp_id');
            $table->integer('comp_cliente_id');
            $table->string('comp_hwid');
            $table->longText('comp_pcInfo');
            $table->date('comp_date_lastCheck');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer');
    }
};
