<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('cve_alumno');
            $table->string('nombre'); 
            $table->string('apellido');
            $table->integer('edad');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->unsignedBigInteger('cve_grupo');
            $table->timestamps();

            $table->foreign('cve_grupo')
            ->references('cve_grupo')->on('grupo')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
