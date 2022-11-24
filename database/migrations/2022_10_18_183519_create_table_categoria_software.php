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
        Schema::create('categoria_software', function (Blueprint $table) {
            $table->bigIncrements('catSf_id');
            $table->string('catSf_nombre', 100);
            $table->longText('catSf_descripcion');
            $table->string('catSf_logo', 75)->nullable();
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
        Schema::dropIfExists('categoria_software');
    }
};
