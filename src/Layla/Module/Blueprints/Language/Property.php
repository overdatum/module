<?php namespace Layla\Module\Blueprints\Language;

use Layla\Module\Types\DataType;

class Property extends Blueprint {

	protected $name;

	protected $type;

	protected $value;

	protected $visibility = 'public';

	protected $comment = '';

	public function __construct($name, $type = DataType::UNDEFINED, $value = null, $visibility = 'public', $comment = '')
	{
		$this->name = $name;
		$this->type = $type;
		$this->value = $value;
		$this->visibility = $visibility;
		$this->comment = $comment;
	}

	public static function make($name, $type = DataType::UNDEFINED, $value = null, $visibility = 'public', $comment = '')
	{
		return new static($name, $type, $value, $visibility, $comment);
	}

	public function name($name)
	{
		$this->name = $name;

		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function type($type)
	{
		$this->type = $type;

		return $this;
	}

	public function getType()
	{
		return $this->type;
	}

	public function value($value)
	{
		$this->value = $value;

		return $this;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function visibility($visibility)
	{
		$this->visibility = $visibility;

		return $this;
	}

	public function getVisibility()
	{
		return $this->visibility;
	}

	public function comment($comment)
	{
		$this->comment = $comment;

		return $this;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function getCompiler()
	{
		return $this->getLanguageCompiler();
	}

}
