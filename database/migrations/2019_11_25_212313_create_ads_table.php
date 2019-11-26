<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('year');
            $table->string('color');
            $table->string('fueltype');
            $table->string('price');
            $table->string('image');

            $table->biginteger('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->integer('listcategory_id')->unsigned();
            $table->foreign('listcategory_id')->references('id')->on('listcategories')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });

        Schema::table('ads', function(Blueprint $table){
            $table->dropForeign(['listcategory_id']);
            $table->dropForeign(['vehicle_id']);
            $table->dropForeign(['user_id']);
       });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');

    }
}