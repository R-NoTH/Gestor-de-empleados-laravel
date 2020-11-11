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
            $table->integer('numero_telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('cargo')->nullable();
            $table->string('seccion')->nullable();
            $table->string('alergias_medicamento')->nullable();
            $table->integer('telefono_emergencia')->nullable();
            $table->string('enfermedad_laboral')->nullable();
            $table->string('accidentes_trabajo')->nullable();
            $table->string('enfermedad_comun')->nullable();
            $table->string('covid')->nullable();
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
