<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryidToClassifiedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('classifieds', function(Blueprint $table){
           $table->integer('category_id')->unsigned();
           $table->foreign('category_id')->references('id')->on('listcategories');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classifieds', function(Blueprint $table){
           $table->dropForeign('classifieds_category_id_foreign');
       });
    }
}
