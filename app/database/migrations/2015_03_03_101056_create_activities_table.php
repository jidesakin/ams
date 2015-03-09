<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Creates the activities table - where activities are logged
        Schema::create('activities', function($table){
           $table->increments('activity_id');
            $table->string('username');
            $table->string('type');
            $table->string('details');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Drops the table
        Schema::drop('activities');
	}

}
