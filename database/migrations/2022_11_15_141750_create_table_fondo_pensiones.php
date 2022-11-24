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
        Schema::create('fondo_pensiones', function (Blueprint $table) {
            $table->bigIncrements('fond_id');
            $table->string('fond_nombre');
            $table->float('fond_comisionFonfo', 2, 2);
            $table->float('fond_comisionFlujo', 2, 2);
            $table->float('fond_comisionMixta', 2, 2);
            $table->float('fond_seguro', 2, 2);
            $table->string('fond_logo')->nullable();
            $table->float('fond_porcentaje', 2, 2);
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
        Schema::dropIfExists('fondo_pensiones');
    }
};
