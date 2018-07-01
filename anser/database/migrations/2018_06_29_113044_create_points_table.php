<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

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
            $table->integer('amount')->default(0);
            $table->string('newest_species',50)->nullable();
            $table->date('newest_date')->nullable();
            $table->integer('amount')->unsigned()->default(0);
            $table->integer('birder_id')->unsigned();
            $table->integer('listcategory_id')->unsigned();
            $table->timestamps();

            $table->foreign('birder_id')
                           ->references('id')
                           ->on('birders')
                           ->onDelete('cascade');

            $table->foreign('listcategory_id')
                           ->references('id')
                           ->on('list_categories')
                           ->onDelete('cascade');
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
