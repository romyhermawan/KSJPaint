<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('email');
            $table->string('alamat1')->nullable();
            $table->string('alamat2')->nullable();
            $table->string('line');
            $table->string('instagram');
            $table->string('bank1');
            $table->string('bank2')->nullable();
            $table->string('bank3')->nullable();
            $table->string('phone1');
            $table->string('phone2')->nullable();
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
        Schema::drop('contactus');
    } 
}
