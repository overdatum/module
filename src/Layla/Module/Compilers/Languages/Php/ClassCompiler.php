<?php namespace Layla\Module\Compilers\Languages\Php;

use Layla\Module\Compilers\CompilerInterface;
use Layla\Module\Compilers\Languages\PhpLanguage;
use Layla\Module\Blueprints\ClassBlueprint;

class ClassCompiler extends PhpLanguage implements CompilerInterface {

	/**
	 * The blueprint to compile
	 *
	 * @var \Layla\Module\Blueprints\ClassBlueprint
	 */
	protected $blueprint;

	/**
	 * Create a new ClassCompiler instance
	 *
	 * @param string $blueprint The blueprint to compile
	 */
	public function __construct(ClassBlueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

	/**
	 * Get the other classnames this class needs
	 *
	 * @return array
	 */
	public function getUses()
	{
		$uses = $this->blueprint->getUses();

		$namespaceCompiler = $this->getNamespaceCompilerFor($this->blueprint->getName());

		// Add baseclass to use statements if necesarry
		if( ! is_null($this->blueprint->getBase()) && ! $namespaceCompiler->isWithinNamespaceOf($this->blueprint->getBase()))
		{
			$uses[] = $namespaceCompiler->getName();
		}

		// Remove any unneeded uses
		// $me = $this;
		// array_filter($uses, function($use) use ($me)
		// {
		// 	return $me->getNameCompiler()->getNamespace();
		// });

		// Sort the bunch
		asort($uses);

		return $uses;
	}

	/**
	 * Get the class comment
	 *
	 * @return string
	 */
	protected function compileComment()
	{
		if($this->blueprint->hasComment())
		{
			return $this->comment($this->blueprint->getComment());
		}

		return "";
	}

	/**
	 * Compile the class
	 *
	 * @return string The contents of the file
	 */
	public function compile()
	{
		$nameCompiler = $this->getNamespaceCompilerFor($this->blueprint->getName());
		$baseCompiler = $this->getNamespaceCompilerFor($this->blueprint->getBase());

		// Start the php file
		$content = "<?php";

		// Add the namespace if necessary
		if($nameCompiler->hasNamespace())
		{
			$content .= " namespace ".$nameCompiler->getNamespace().";\n";
		}
		$content .= "\n";

		// Add the use statements if necessary
		if(count($this->getUses()) > 0)
		{
			foreach($this->getUses() as $use)
			{
				$content .= "use ".$use.";\n";
			}

			$content .= "\n";
		}

		// $content .= $this->blueprint->document();

		// Add the name of the class
		$content .= $this->blueprint->getType()." ".$nameCompiler->getClass();

		// Extend a base class if necessary
		if( ! is_null($this->blueprint->getBase()))
		{
			$content .= " extends ".$baseCompiler->getClass();
		}

		// Open the class
		$content .= " {\n";

		// Add properties
		$properties = $this->blueprint->getProperties();

		if( ! $properties->isEmpty())
		{
			$content .= "\n".$this->indent($properties->compile())."\n";
		}

		// Add methods
		$methods = $this->blueprint->getMethods();
		if( ! $methods->isEmpty())
		{
			$content .= "\n".$this->indent($methods->compile())."\n";
		}

		// Close the class
		$content .= "\n}\n\n";

		return $content;
	}

}
