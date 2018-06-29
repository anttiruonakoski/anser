<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount');
            $table->integer('birder_id')->unsigned();;
            $table->integer('listcategory_id');
            $table->timestamps();

            $table->foreign('birder_id')
                           ->references('id')
                           ->on('birders')
                           ->onDelete('cascade');

            /*$table->foreign('listcategory_id')
                           ->references('id')
                           ->on('list_categories')
                           ->onDelete('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
