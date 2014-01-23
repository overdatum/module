<?php namespace Layla\Module\Blueprints\Resource\Model;

use Illuminate\Support\Collection;

class Column {

	protected $name;

	protected $type;

	protected $size;

	protected $rules;

	public function __construct()
	{

	}

	public function getCompiler()
	{
		return $this->getResourceCompiler();
	}

}
