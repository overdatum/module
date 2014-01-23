<?php namespace Layla\Module\Compilers;

use Layla\Module\Compilers\CompilerInterface;
use Layla\Module\Compilers\Languages\PhpLanguage;

interface CompilerInterface {

	/**
	 * Compile the blueprint into code
	 *
	 * @return string the code
	 */
	public function compile();

}
