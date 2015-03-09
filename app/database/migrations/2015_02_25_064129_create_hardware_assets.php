<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareAssets extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //Schema defines the hardware assets table
        Schema::create('hardware_assets', function($table){
            $table->increments('asset_id');
            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
            $table->string('name');
            $table->string('model');
            $table->string('category');
            $table->string('serial_number');
            $table->string('assigned_to');
            $table->string('cost_price');
            $table->string('status');
            $table->string('location');
            $table->date('purchased_date');
            $table->date('end_of_life');
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
        Schema::drop('hardware_assets');

	}

}
