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
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('comp_id');
            $table->unsignedBigInteger('comp_prov_id');
            $table->unsignedBigInteger('comp_user_id');
            $table->unsignedBigInteger('comp_mov_id');
            $table->date('comp_fecha');
            $table->char('comp_estado',1);
            $table->string('comp_observaciones');
            $table->double('comp_total', 6,2);
            $table->timestamps();
            $table->foreign('comp_prov_id')->references('prov_id')->on('proveedor');
            $table->foreign('comp_user_id')->references('id')->on('users');
            $table->foreign('comp_mov_id')->references('mov_id')->on('movimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
};
