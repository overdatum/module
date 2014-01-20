<?php namespace Layla\Blueprints;

class MethodBlueprint {

	protected $name;
	protected $parameters;
	protected $returnType;

	public function __construct($name, ParameterBag $parameters = null, $returnType = DataType::UNDEFINED)
	{
		if($parameters === null)
		{
			$parameters = new ParameterCollection;
		}

		$this->name       = $name;
		$this->parameters = $parameters;
		$this->returnType = $returnType;
	}

}
