<?php namespace Layla\Blueprints;

class ClassBlueprint {

	protected $name;
	protected $namespace;
	protected $properties;
	protected $methods;

	public function __construct($name, PropertyBag $properties = null, MethodBag $methods = null)
	{
		if($properties === null)
		{
			$properties = new PropertyBag;
		}

		if($methods === null)
		{
			$methods = new PropertyBag;
		}

		$this->properties = $properties;
		$this->methods    = $methods;

		$this->setName($name);
	}

	public function setName($name)
	{
		if(strpos($name, '.') !== false)
		{
			$parts = explode('.', $name);
			$name = array_pop($parts);
			$this->namespace = implode('.', $parts);
		}

		$this->name = $name;
	}

	public function addProperty(PropertyBlueprint $method)
	{
		$this->methods->put($method->name, $method);
	}

	public function addMethod(MethodBlueprint $method)
	{
		$this->methods->put($method->name, $method);
	}

}
