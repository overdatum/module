<?php namespace Layla\Blueprints\Language;

use Layla\Module\Types\DataType;

class Parameter extends Blueprint {

	protected $name;

	protected $type;

	protected $comment;

	public function __construct($name, $type = DataType::STRING, $comment = null)
	{
		$this->name = $name;
		$this->type = $type;
		$this->comment = $comment;
	}

	public function getName()
	{
		return $this->name;
	}

	public function name($name)
	{
		$this->name = $name;
	}

	public function getType()
	{
		return $this->type;
	}

	public function type($type)
	{
		$this->type = $type;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function comment($comment)
	{
		$this->comment = $comment;
	}

}
