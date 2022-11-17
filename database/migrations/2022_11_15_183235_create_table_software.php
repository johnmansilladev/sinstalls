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
        Schema::create('software', function (Blueprint $table) {
            $table->bigIncrements('soft_id');
            $table->integer('soft_bra_id');
            $table->string('soft_nombre', 30);
            $table->string('soft_descripcion', 75)->nullable();
            $table->string('soft_logo')->nullable();
            $table->timestamps();
            //$table->foreign('soft_bra_id')->references('bra_id')->on('brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
};
