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
        Schema::create('tarjeta', function (Blueprint $table) {
            $table->bigIncrements('tar_id');
            $table->unsignedBigInteger('tar_cuentBan_id');
            $table->string('tar_numero', 16);
            $table->string('tar_anioVcto', 4);
            $table->string('tar_mesVcto', 4);
            $table->string('tar_cvv', 3);
            $table->string('tar_passwordCajero', 25);
            $table->string('tar_passwordWeb', 25);
            $table->timestamps();
            $table->foreign('tar_cuentBan_id')->references('cuentBan_id')->on('cuenta_bancaria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjeta');
    }
};
