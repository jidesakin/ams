<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeploymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Schema that defines the deployment_table
        Schema::create('deployments', function($table){
            $table->increments('deployment_id');
            $table->integer('asset_id')->unsigned();
            $table->string('asset_type');
            $table->string('place');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
