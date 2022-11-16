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
        Schema::create('version_software', function (Blueprint $table) {
            $table->bigIncrements('verSf_id');
            $table->integer('verSf_soft_id');
            $table->string('verSf_nombre');
            $table->string('verSf_descripcion');
            $table->json('verSf_soCompatibles');
            $table->json('verSf_enlaces');
            $table->char('verSf_estado', 1);
            $table->string('verSf_dbLanguage')->nullable();
            $table->string('verSf_intLanguage')->nullable();
            $table->string('verSf_licenseTime')->nullable();
            $table->string('verSf_size')->nullable();
            $table->string('verSf_sizeAfterInstall')->nullable();
            $table->longText('verSf_models');
            $table->longText('verSf_news');
            $table->timestamps();
            $table->foreign('hrec_chip_id')->references('chip_id')->on('operador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('version_software');
    }
};
