<?php namespace Layla\Module\Compilers\Languages\Php;

use Layla\Module\Compilers\Languages\PhpLanguage;
use Layla\Module\Compilers\CompilerInterface;
use Layla\Module\Blueprints\Language\Method;

class MethodCompiler extends PhpLanguage implements CompilerInterface {

	/**
	 * The blueprint to compile
	 *
	 * @var \Layla\Module\Blueprints\Language\Method
	 */
	protected $blueprint;

	/**
	 * Create a new MethodCompiler instance
	 *
	 * @param string $blueprint The blueprint to compile
	 */
	public function __construct(Method $blueprint)
	{
		$this->blueprint = $blueprint;
	}

	public function getComment()
	{
		$blueprint = $this->blueprint;

		$parameters = $blueprint->getParameters();

		$content = '';
		if( ! is_null($blueprint->getComment()))
		{
			$content .= $blueprint->getComment()."\n";
		}

		if( ! $parameters->isEmpty())
		{
			$lines = array();
			foreach($parameters as $parameter)
			{
				$lines[] = array('@param', $blueprint->getType(), '$'.$parameter->getName(), $parameter->getComment());
			}

			$content .= $this->compileTable($lines);
		}

		$content .= "\n@return ".$this->compileType($this->blueprint->getReturnType())." ".$blueprint->getReturnComment();

		return $this->comment($content);
	}

	public function compile()
	{
		$comment = $this->getComment();

		return $comment."\n".'public function '.$this->blueprint->getName()."()\n{\n".$this->indent($this->blueprint->getBody())."\n}";

		return $this->blueprint->getName();
	}

}
