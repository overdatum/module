<?php namespace Layla\Module\Generators;

use Layla\Module\Blueprints\SeedBlueprint;

class SeedGenerator extends Generator {

	/**
	 * Location of the stub
	 *
	 * @var string
	 */
	protected $stub = 'seed.stub';

	/**
	 * Create a new SeedGenerator instance
	 *
	 * @param SeedBlueprint $blueprint
	 */
	public function __construct(SeedBlueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

}
