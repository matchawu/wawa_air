<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAqisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aqis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('o3')->nullable(); 
            $table->string('pm25')->nullable(); 
            $table->string('pm10')->nullable(); 
            $table->string('co')->nullable(); 
            $table->string('so2')->nullable(); 
            $table->string('no2')->nullable(); 
            $table->string('aqi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aqis');
    }
}
