<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabulatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabulators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('participants');
            $table->string('j1_performance', 11);
            $table->string('j1_entertainment', 11);
            $table->string('j1_costume', 11);
            $table->string('j1_audience', 11);
            $table->string('j2_performance', 11);
            $table->string('j2_entertainment', 11);
            $table->string('j2_costume', 11);
            $table->string('j2_audience', 11);
            $table->string('j3_performance', 11);
            $table->string('j3_entertainment', 11);
            $table->string('j3_costume', 11);
            $table->string('j3_audience', 11);
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
        Schema::dropIfExists('tabulators');
    }
}
