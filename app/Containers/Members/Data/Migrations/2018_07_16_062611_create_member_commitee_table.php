<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberCommiteeTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('committee_id');

            $table->timestamps();
            //$table->softDeletes();

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('committee_id')->references('id')->on('committees')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('project');
    }
}
