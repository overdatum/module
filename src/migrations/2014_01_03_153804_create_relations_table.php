<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resource_id');
			$table->integer('other_resource_id')->nullable();
			$table->string('type');
			$table->string('name');
			$table->string('morph_key')->nullable();
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
		Schema::drop('relations');
	}

}
