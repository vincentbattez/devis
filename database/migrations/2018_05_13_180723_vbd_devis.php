<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VbdDevis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vbd_devis', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_user')->index();
            $table->foreign('id_user')->references('id')->on('vbd_users')->onDelete('cascade');

            $table->unsignedInteger('id_cgu')->index();
            $table->foreign('id_cgu')->references('id')->on('vbd_cgu')->onDelete('cascade');

            $table->unsignedInteger('id_customer')->index();
            $table->foreign('id_customer')->references('id')->on('vbd_customers')->onDelete('cascade');

            $table->string('type');
            $table->string('title');
            $table->timestamp('prestation_start')->default(null);
            $table->integer('working_time');
            $table->integer('working_price');
            
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
        Schema::dropIfExists('vbd_devis');
    }
}
