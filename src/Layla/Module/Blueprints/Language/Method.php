<?php namespace Layla\Module\Blueprints\Language;

use Layla\Module\Types\DataType;

class Method extends Blueprint {

	protected $name;

	protected $parameters;

	protected $returnType;

	protected $returnComment;

	protected $comment;

	public function __construct($name, Parameters $parameters = null, $returnType = DataType::UNDEFINED)
	{
		if($parameters === null)
		{
			$parameters = new Parameters;
		}

		$this->name       = $name;
		$this->parameters = $parameters;
		$this->returnType = $returnType;
	}

	public static function make($name, Parameters $parameters = null, $returnType = DataType::UNDEFINED)
	{
		return new static($name, $parameters, $returnType);
	}

	public function getName()
	{
		return $this->name;
	}

	public function name($name)
	{
		$this->name = $name;

		return $this;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function parameters($parameters)
	{
		$this->parameters = $parameters;

		return $this;
	}

	public function addParameter(Parameter $parameter)
	{
		$this->parameters->put($parameter);

		return $this;
	}

	public function getReturnType()
	{
		return $this->returnType;
	}

	public function returnType($returnType)
	{
		$this->returnType = $returnType;

		return $this;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function body($body)
	{
		$this->body = $body;

		return $this;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function comment($comment)
	{
		$this->comment = $comment;

		return $this;
	}

	public function getReturnComment()
	{
		return $this->returnComment;
	}

	public function returnComment($returnComment)
	{
		$this->returnComment = $returnComment;

		return $this;
	}

}
