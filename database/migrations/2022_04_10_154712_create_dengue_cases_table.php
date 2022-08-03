<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDengueCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dengue_cases', function (Blueprint $table) {
            $table->id('case_id')->unique();
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
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dengue_cases');
    }
}
