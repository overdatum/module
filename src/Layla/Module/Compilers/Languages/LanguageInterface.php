<?php namespace Layla\Module\Compilers\Languages;

interface LanguageInterface {

	/**
	 * Get the namespace compiler for a given resource identifier
	 *
	 * @param string $resourceIdentifier The identifier of the resource
	 *
	 * @return \Layla\Module\Compilers\Languages\NamespaceCompilerInterface
	 */
	public function getNamespaceCompilerFor($resourceIdentifier);

	/**
	 * Comment text
	 *
	 * @param  string  $text       The text to comment
	 * @param  boolean $multiline  Should a multiline form comment be used?
	 *
	 * @return string The commented string
	 */
	public function comment($text, $multiline);

	/**
	 * Export a variable into it's textual representation
	 *
	 * @param  $var
	 *
	 * @return string
	 */
	public function export($var);

}
