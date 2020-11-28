<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('job_id');
            $table->unsignedInteger('profile_id');
            $table->unsignedInteger('status_id');
            $table->timestamps();
            $table->unique(['job_id', 'profile_id']);
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('status_id')->references('id')->on('application_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
