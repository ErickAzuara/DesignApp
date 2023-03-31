<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student',function(Blueprint $table){
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('group');
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id')->references('id')->on('career');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
