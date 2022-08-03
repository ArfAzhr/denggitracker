<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newcases', function (Blueprint $table) {
            $table->id();
            $table->integer('caseid')->unique();
            $table->string('patientname');
            $table->string('sex');
            $table->integer('age');
            $table->string('region');
            $table->string('area');
            $table->date('date');
            $table->string('denguestatus');
            $table->string('denguelevel');
            $table->rememberToken();
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
        Schema::dropIfExists('newcases');
    }
}
