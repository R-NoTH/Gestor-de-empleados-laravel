<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('name')->nullable();
            $table->string('documento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('rh')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->string('numero_telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('cargo')->nullable();
            // $table->string('seccion')->nullable();
            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->foreign('seccion_id')->references('id')->on('seccions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('covid')->nullable();
            $table->string('alergias_medicamento')->nullable();
            $table->string('telefono_emergencia')->nullable();
            $table->string('enfermedad_laboral')->nullable();
            $table->string('accidentes_trabajo')->nullable();
            $table->string('enfermedad_comun')->nullable();
            $table->string('patologia_especial')->nullable();
            $table->string('enfermedad_laboral_arl')->nullable();
            $table->date('gestantes')->nullable();
            $table->string('lactantes')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
