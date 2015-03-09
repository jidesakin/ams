<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Defines the schema of the suppliers table
        Schema::create('suppliers', function($table){

            $table->increments('supplier_id');
            $table->string('supplier_name');
            $table->string('address');
            $table->string('contact_person');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->integer('number_of_hardware');
            $table->integer('number_of_software');
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
        Schema::drop('suppliers');
	}

}
