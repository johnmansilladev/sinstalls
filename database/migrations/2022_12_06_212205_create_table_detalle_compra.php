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
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->bigIncrements('detComp_id');
            $table->unsignedBigInteger('detComp_comp_id');
            $table->string('detComp_item');
            $table->tinyInteger('detComp_cantidad');
            $table->double('detComp_precioUnit', 6,2);
            $table->timestamps();
            $table->foreign('detComp_comp_id')->references('comp_id')->on('compra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_compra');
    }
};
