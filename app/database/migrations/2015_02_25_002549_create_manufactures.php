<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufactures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Defines the schema for the manufacturers table
        Schema::create('manufacturers', function($table){

            $table->increments('manufacturer_id');
            $table->string('manufacturer_name');
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('address');
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
        Schema::drop('manufacturers');
	}

}
