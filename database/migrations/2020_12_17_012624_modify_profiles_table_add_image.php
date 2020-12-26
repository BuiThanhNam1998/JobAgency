<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyProfilesTableAddImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->dropForeign(['place_identity_card_id']);
            $table->dropColumn('place_identity_card_id');
            $table->dropForeign(['profile_status_id']);
            $table->dropColumn('profile_status_id');
            $table->dropColumn('identity_number');
            $table->dropColumn('date_identity_card');
            $table->dropColumn('start_working_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
