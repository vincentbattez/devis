<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VbdCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vbd_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->tinyInteger('gender');
            $table->dateTime('birthday');
            $table->string('nationality');

            $table->string('county');
            $table->string('region');
            $table->string('city');
            $table->string('postal');
            $table->string('address');
            
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('job');

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
        Schema::dropIfExists('vbd_customers');
    }
}
