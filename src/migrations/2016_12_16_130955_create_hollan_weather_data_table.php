<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHollanWeatherDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hollanbo_weather_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sensor_id')->unsigned()->nullable();
            $table->string('temperature')->nullable();
            $table->string('humidity')->nullable();
            $table->string('pressure')->nullable();
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
        Schema::drop('hollanbo_weather_data');
    }
}
