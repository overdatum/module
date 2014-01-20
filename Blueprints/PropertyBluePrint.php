<?php namespace Layla\Blueprints;

class PropertyBlueprint {

	protected $name;

	public function __construct($name, $type = DataType::STRING)
	{
		$this->name = $name;
		$this->type = $type;
	}

}
