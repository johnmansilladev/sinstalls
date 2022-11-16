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
        Schema::create('criptomonedas', function (Blueprint $table) {
            $table->bigIncrements('cript_id');
            $table->string('cript_nombre', 30);
            $table->string('cript_descripcion',75)->nullable();
            $table->string('cript_logo', 100)->nullable();
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
        Schema::dropIfExists('criptomonedas');
    }
};
