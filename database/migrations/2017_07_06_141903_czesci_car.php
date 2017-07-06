<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CzesciCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('czesci_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa',255);
            $table->integer('idCar')->unsigned();
            $table->foreign('idCar')
              ->references('id')->on('cars')
              ->onDelete('cascade');
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
        Schema::dropIfExists('czesci_car');
    }
}
