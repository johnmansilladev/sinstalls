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
        Schema::create('cuenta_bancaria', function (Blueprint $table) {
            $table->bigIncrements('cuentBan_id');
            $table->unsignedBigInteger('cuentBan_ban_id');
            $table->string('cuentBan_titular', 125);
            $table->string('cuentBan_numeroCuenta', 20);
            $table->string('cuentBan_cci', 23);
            $table->char('cuentBan_moneda', 1);
            $table->string('cuentBan_descripcion');
            $table->char('cuentBan_tipoCuenta', 1);
            $table->timestamps();
            $table->foreign('cuentBan_ban_id')->references('ban_id')->on('banco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_bancaria');
    }
};
