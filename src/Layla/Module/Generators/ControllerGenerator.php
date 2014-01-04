<?php namespace Layla\Module\Generators;

use Layla\Module\Blueprints\ControllerBlueprint;

class ControllerGenerator extends Generator {

	/**
	 * Location of the stub
	 *
	 * @var string
	 */
	protected $stub = 'controller.stub';

	/**
	 * Create a new ControllerGenerator instance
	 *
	 * @param ControllerBlueprint $blueprint
	 */
	public function __construct(ControllerBlueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

}
