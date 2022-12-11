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
        Schema::create('plataforma', function (Blueprint $table) {
            $table->bigIncrements('plat_id');
            $table->string('plat_nombre', 75);
            $table->string('plat_descripcion',175)->nullable();
            $table->string('plat_url', 125);
            $table->string('plat_logo')->nullable();
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
        Schema::dropIfExists('plataforma');
    }
};
