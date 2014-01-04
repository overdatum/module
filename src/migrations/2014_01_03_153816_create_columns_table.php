<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('columns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resource_id');
			$table->string('name');
			$table->string('type');
			$table->integer('size');
			$table->string('default');
			$table->boolean('fillable');
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
		Schema::drop('columns');
	}

}
