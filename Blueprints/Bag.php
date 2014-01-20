<?php Layla\Blueprints;

class Bag {

	protected $items;

	public function __construct($items = array())
	{
		$this->items = $items;
	}

	public function all()
	{
		return $items;
	}

	public function put($key, $value)
	{
		$this->items[$key] = $value;
	}

}
