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
            $table->tinyInteger('gender')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('nationality')->nullable();

            $table->string('county')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('address')->nullable();
            
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('job')->nullable();

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
