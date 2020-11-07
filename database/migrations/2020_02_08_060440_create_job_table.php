<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description', 100000);
            $table->string('title');
            $table->date('post_date');
            $table->string('image')->nullable();
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('status_id');
            $table->bigInteger('salary')->nullable();
            $table->timestamps();
            $table->foreign('career_id')->references('id')->on('career')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('job_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
