<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommitteeTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('committees', function (Blueprint $table) {

            $table->increments('id');
            $table->text('name');
            $table->text('description');
            $table->unsignedInteger('board_id');

            $table->timestamps();
            //$table->softDeletes();

            // make relation btn table users and blogs
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('committees');
    }

}
