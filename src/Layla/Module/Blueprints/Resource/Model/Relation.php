<?php namespace Layla\Module\Blueprints\Resource\Model;

use Layla\Module\Types\RelationType;
use Illuminate\Support\Collection;

class Relation extends Blueprint {

	protected $name;

	protected $other;

	protected $type;

	public function __construct($name, $other, $type = RelationType::HASONE)
	{
		$this->name = $name;
		$this->other = $other;
		$this->type = $type;
	}

	public function getCompiler()
	{
		return $this->getResourceCompiler();
	}

}
