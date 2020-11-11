<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->integer('EorI1');
            $table->integer('EorI2');
            $table->integer('EorI3');
            $table->integer('EorI4');
            $table->integer('EorI5');
            $table->integer('SorN1');
            $table->integer('SorN2');
            $table->integer('SorN3');
            $table->integer('SorN4');
            $table->integer('SorN5');
            $table->integer('TorF1');
            $table->integer('TorF2');
            $table->integer('TorF3');
            $table->integer('TorF4');
            $table->integer('TorF5');
            $table->integer('JorP1');
            $table->integer('JorP2');
            $table->integer('JorP3');
            $table->integer('JorP4');
            $table->integer('JorP5');
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
        Schema::dropIfExists('diagnoses');
    }
}
