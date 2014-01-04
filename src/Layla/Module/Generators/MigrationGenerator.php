<?php namespace Layla\Module\Generators;

use Layla\Module\Blueprints\MigrationBlueprint;

class MigrationGenerator extends Generator {

	/**
	 * Location of the stub
	 *
	 * @var string
	 */
	protected $stub = 'migration.stub';

	/**
	 * Create a new MigrationGenerator instance
	 *
	 * @param MigrationBlueprint $blueprint
	 */
	public function __construct(MigrationBlueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

}
