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
        Schema::create('marca_software', function (Blueprint $table) {
            $table->bigIncrements('mars_id');
            $table->string('mars_nombre', 50);
            $table->string('mars_descripcion',75)->nullable();
            $table->string('mars_logo',100)->nullable();
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
        Schema::dropIfExists('marca_software');
    }
};
