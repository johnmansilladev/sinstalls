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
        Schema::create('empleado', function (Blueprint $table) {
            $table->bigIncrements('empl_id');
            //$table->unsignedBigInteger('empl_emp_id');
            //$table->unsignedBigInteger('empl_fond_id');
            $table->char('empl_codigo', 10);
            $table->string('empl_apePaterno',50);
            $table->string('empl_apeMaterno',50);
            $table->string('empl_nombres', 50);
            $table->unsignedBigInteger('empl_tipoDoc_id');
            $table->string('empl_direccion', 125);
            $table->string('empl_correo', 125);
            $table->char('empl_celular', 9);
            $table->date('empl_fechaNacimiento');
            $table->date('empl_fechaIngreso');
            $table->date('empl_fechaBaja');
            $table->string('empl_contacto',9);
            $table->string('empl_numeroContacto');
            $table->char('empl_estado',1);
            $table->integer('empl_numeroHijos');
            $table->string('empl_observaciones');
            $table->timestamps();
            //$table->foreign('empl_emp_id')->references('emp_id')->on('empresa');
            //$table->foreign('empl_fond_id')->references('fond_id')->on('fondo_pensiones');
            $table->foreign('empl_tipoDoc_id')->references('tipoDoc_id')->on('tipo_documento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
