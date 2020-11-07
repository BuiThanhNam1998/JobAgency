<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('identity_number');
            $table->date('date_identity_card');
            $table->unsignedInteger('place_identity_card_id');
            $table->date('date_of_birth');
            $table->boolean('sex');
            $table->date('start_working_date')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->string('county');
            $table->string('address');
            $table->string('education');
            $table->string('cv')->nullable();
            $table->string('experience')->nullable();
            $table->string('language')->nullable();
            $table->string('certification')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('profile_status_id');
            $table->unsignedInteger('profile_status_id_before')->nullable();
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('job_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('place_identity_card_id')->references('id')->on('city')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('job')->onDelete('cascade');
            $table->foreign('profile_status_id')->references('id')->on('profile_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
