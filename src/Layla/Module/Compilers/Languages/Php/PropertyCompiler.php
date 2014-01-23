<?php namespace Layla\Module\Compilers\Languages\Php;

use Layla\Module\Blueprints\Language\Property;
use Layla\Module\Compilers\CompilerInterface;
use Layla\Module\Compilers\Languages\PhpLanguage;

class PropertyCompiler extends PhpLanguage implements CompilerInterface {

	/**
	 * The blueprint to compile
	 *
	 * @var \Layla\Module\Blueprints\Language\Property
	 */
	protected $blueprint;

	/**
	 * Create a new MethodCompiler instance
	 *
	 * @param string $blueprint The blueprint to compile
	 */
	public function __construct(Property $blueprint)
	{
		$this->blueprint = $blueprint;
	}

	/**
	 * Compile the property
	 *
	 * @return string
	 */
	public function compile()
	{
		$comment = $this->comment($this->blueprint->getComment()."\n\n@var ".$this->compileType($this->blueprint->getType()));
		$property = $this->blueprint->getVisibility().' $'.$this->blueprint->getName().' = '.$this->export($this->blueprint->getValue());

		return $comment."\n".$property;
	}

}
