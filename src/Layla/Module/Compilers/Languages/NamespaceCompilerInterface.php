<?php namespace Layla\Module\Compilers\Languages;

interface NamespaceCompilerInterface {

	/**
	 * Create a new NamespaceCompiler instance
	 *
	 * @param string $resourceIdentifier The identifier of the resource (vendor.package::path.to.classname)
	 */
	public function __construct($resourceIdentifier);

	/**
	 * Get the classname without the namespace
	 *
	 * @return string
	 */
	public function getClass();

	/**
	 * Get the namespace without the name of the class
	 *
	 * @return string
	 */
	public function getNamespace();

	/**
	 * Check if a class is within the namespace of another class
	 *
	 * @param  string  $resourceIdentifier The identifier of the resource
	 *
	 * @return boolean
	 */
	public function isWithinNamespaceOf($resourceIdentifier);

}
