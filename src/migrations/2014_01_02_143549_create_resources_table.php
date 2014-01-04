<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('previous_version_id')->nullable();
			$table->integer('module_id');
			$table->string('extends')->nullable();

			$table->boolean('include_package_namespace');

			$table->string('name');
			$table->string('plural_name')->nullable();
			$table->string('description')->nullable();

			$table->string('controllers_base')->nullable();
			$table->string('resource_controllers_base')->nullable();
			$table->string('models_base')->nullable();
			$table->string('migrations_base')->nullable();
			$table->string('seeds_base')->nullable();
			$table->string('validator_base')->nullable();

			$table->string('controller_namespace')->nullable();
			$table->string('resource_controller_namespace')->nullable();
			$table->string('model_namespace')->nullable();
			$table->string('seed_namespace')->nullable();
			$table->string('validator_namespace')->nullable();

			$table->string('controllers_path')->nullable();
			$table->string('resource_controllers_path')->nullable();
			$table->string('models_path')->nullable();
			$table->string('migrations_path')->nullable();
			$table->string('seeds_path')->nullable();
			$table->string('validators_path')->nullable();

			$table->string('validator')->nullable();
			$table->string('index_validator')->nullable();
			$table->string('store_validator')->nullable();
			$table->string('show_validator')->nullable();
			$table->string('update_validator')->nullable();

			$table->text('rules')->nullable();
			$table->text('index_rules')->nullable();
			$table->text('store_rules')->nullable();
			$table->text('show_rules')->nullable();
			$table->text('update_rules')->nullable();

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
		Schema::drop('resources');
	}

}
