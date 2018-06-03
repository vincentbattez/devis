<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VbdTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vbd_tasks', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_devis')->index();
            $table->foreign('id_devis')->references('id')->on('vbd_devis')->onDelete('cascade');
            
            $table->string('title');
            $table->text('tasks')->nullable();
            $table->integer('duration')->nullable();
            $table->tinyInteger('free')->default('0');
            $table->string('category');
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
        Schema::dropIfExists('vbd_tasks');
    }
}
