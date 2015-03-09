<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareAssets extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //Defines the schema for the software table
        Schema::create('software_assets', function($table){

            $table->increments('asset_id');
            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
            $table->string('name');
            $table->string('serial_number');
            $table->string('assigned_to');
            $table->string('cost_price');
            $table->string('license_key');
            $table->date('purchased_date');
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
        //Drops the software table
        Schema::drop('software_assets');
	}

}
