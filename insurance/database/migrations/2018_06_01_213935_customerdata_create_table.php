<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerdataCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerdata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->string('driver_firstname');
            $table->string('driver_lastname');
            $table->integer('driver_gender');
            $table->integer('driver_married');
            $table->date('birthdate');
            $table->string('driver_phone');
            $table->string('driver_home_address');
            $table->string('driver_city');
            $table->string('driver_state');
            $table->string('driver_zip');
            $table->integer('driver_own_rent');
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
        Schema::dropIfExists('customerdata');
    }
}
