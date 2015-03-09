<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        //Table for various groups/departments/units in the organisation
        Schema::create('groups', function($table){
            $table->increments('group_id');
            $table->string('group_name');
            $table->boolean('admin_right')->default(0);
            $table->boolean('report_right')->default(0);
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
        //Drop the group table
        Schema::drop('groups');
	}

}
