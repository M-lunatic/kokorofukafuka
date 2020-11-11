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
            $table->string('EorI1');
            $table->string('EorI2');
            $table->string('EorI3');
            $table->string('EorI4');
            $table->string('EorI5');
            $table->string('SorN1');
            $table->string('SorN2');
            $table->string('SorN3');
            $table->string('SorN4');
            $table->string('SorN5');
            $table->string('TorF1');
            $table->string('TorF2');
            $table->string('TorF3');
            $table->string('TorF4');
            $table->string('TorF5');
            $table->string('JorP1');
            $table->string('JorP2');
            $table->string('JorP3');
            $table->string('JorP4');
            $table->string('JorP5');
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
