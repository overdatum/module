<?php namespace Layla\Module\Blueprints\Language;

class Klass extends Blueprint {

	/**
	 * The name of the class
	 *
	 * @var string
	 */
	protected $name;

	protected $base;

	protected $properties;

	protected $methods;

	public function __construct($name, Properties $properties = null, Methods $methods = null)
	{
		if($properties === null)
		{
			$properties = new Properties;
		}

		if($methods === null)
		{
			$methods = new Methods;
		}

		$this->name       = $name;
		$this->properties = $properties;
		$this->methods    = $methods;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getName()
	{
		return $this->name;
	}

	public function base($base)
	{
		$this->base = $base;

		return $this;
	}

	public function getBase()
	{
		return $this->base;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function getMethods()
	{
		return $this->methods;
	}

	public function uses($uses)
	{
		$this->uses = $uses;

		return $this;
	}

	public function getUses()
	{
		return array();
	}

	/**
	 * Add a property to the class
	 *
	 * @param \Layla\Module\Blueprints\Resources\Property $property The property to add
	 *
	 * @return self
	 */
	public function addProperty(Property $property)
	{
		if(is_string($property))
		{
			$property = $this->app['loader']->property($property);
		}

		$this->properties->put($property->getName(), $property);

		return $this;
	}

	/**
	 * Add a method to the class
	 *
	 * @param \Layla\Module\Blueprints\Resources\Method $method The method to add
	 */
	public function addMethod(Method $method = null)
	{
		if(is_string($method))
		{
			$method = $this->app['loader']->method($method);
		}

		$this->methods->put($method->getName(), $method);

		return $this;
	}

}
