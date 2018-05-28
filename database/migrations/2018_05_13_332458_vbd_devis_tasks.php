<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VbdDevisTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vbd_devis_tasks', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_devis')->index();
            $table->foreign('id_devis')->references('id')->on('vbd_devis')->onDelete('cascade');

            $table->unsignedInteger('id_tasks')->index();
            $table->foreign('id_tasks')->references('id')->on('vbd_tasks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vbd_devis_tasks');
    }
}
