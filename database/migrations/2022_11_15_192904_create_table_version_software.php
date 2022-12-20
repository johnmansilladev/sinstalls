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
            $table->unsignedBigInteger('verSf_soft_id');
            $table->string('verSf_nombre');
            //$table->string('verSf_nombreComercial');
            $table->string('verSf_descripcion')->nullable();
            $table->string('verSf_soCompatibles')->nullable();
            $table->string('verSf_enlaces')->nullable();
            $table->char('verSf_estado', 1);
            $table->string('verSf_dbLanguage')->nullable();
            $table->string('verSf_intLanguage')->nullable();
            $table->string('verSf_licenseTime')->nullable();
            $table->string('verSf_size')->nullable();
            $table->string('verSf_sizeAfterInstall')->nullable();
            $table->longText('verSf_models')->nullable();
            $table->longText('verSf_news')->nullable();
            $table->timestamps();
            $table->foreign('verSf_soft_id')->references('soft_id')->on('software');
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
