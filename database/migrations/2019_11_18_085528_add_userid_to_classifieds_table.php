<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUseridToClassifiedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classifieds', function (Blueprint $table) {
         $table->integer('user_id')->unsigned();
         $table->foreign('user_id')->references('id')->on('users');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classifieds', function (Blueprint $table) {
            $table->dropForeign('classifieds_user_id_foreign');
        });
    }
}