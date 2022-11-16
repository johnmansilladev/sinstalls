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
        Schema::create('canal_venta', function (Blueprint $table) {
            $table->bigIncrements('canv_id');
            $table->string('canv_nombre', 50);
            $table->string('canv_descripcion', 100);
            $table->string('canv_logo', 100);
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
        Schema::dropIfExists('canal_venta');
    }
};
