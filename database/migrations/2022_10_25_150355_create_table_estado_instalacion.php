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
        Schema::create('estado_instalacion', function (Blueprint $table) {
            $table->bigIncrements('estInst_id');
            $table->string('estInst_nombre', 30);
            $table->string('estInst_descripcion',125)->nullable();
            $table->string('estInst_colorClass',100);
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
        Schema::dropIfExists('estado_instalacion');
    }
};
