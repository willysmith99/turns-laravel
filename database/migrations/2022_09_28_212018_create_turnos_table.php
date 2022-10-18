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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');

            $table->unsignedBigInteger('labor_id');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('sede_id');
            $table->string('unidad');

            $table->foreign('labor_id')->references('id')->on('labors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade')->onUpdate('cascade');


            $table->string('assistant');
            $table->string('description');
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
        Schema::dropIfExists('turnos');
    }
};
