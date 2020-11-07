<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('time');
            $table->string('place');
            $table->string('description');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('profile_id');
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profile')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('schedule_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
