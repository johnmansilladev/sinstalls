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
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('cli_id');
            $table->string('cli_nombreCompleto', 175);
            $table->string('cli_email', 100)->nullable();
            $table->string('cli_medioContacto')->nullable();
            $table->string('cli_celular', 21)->nullable();
            $table->string('cli_region', 20)->nullable();
            $table->string('cli_pais', 30)->nullable();
            $table->char('cli_subscribe', 1)->default(1);
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
        Schema::dropIfExists('cliente');
    }
};
