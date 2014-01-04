<?php namespace Layla\Module\Blueprints;

use Layla\Module\Models\Resource;

class Blueprint {

	/**
	 * Create a new Blueprint instance
	 *
	 * @param Resource $resource
	 */
	public function __construct(Resource $resource)
	{
		$this->resource = $resource;
	}

	/**
	 * Get the resource model's attributes
	 *
	 * @return array
	 */
	public function getAttributes()
	{
		return $this->resource->toArray();
	}

	/**
	 * Are we in a namespace?
	 *
	 * @return boolean
	 */
	public function hasNamespace()
	{
		return ! empty($this->getNamespace());
	}

	/**
	 * Does the class depend on other ones?
	 *
	 * @return boolean
	 */
	public function hasUses()
	{
		return ! empty($this->getUses());
	}

	/**
	 * Get the use statements for this class's dependencies
	 *
	 * @return string
	 */
	public function getUses()
	{
		return '';
	}

	/**
	 * Get the last segment from a namespace (the classname)
	 *
	 * @param  string $namespace
	 *
	 * @return string
	 */
	protected function getLastNamespaceSegment($namespace)
	{
		$parts = explode('\\', $namespace);

		return end($parts);
	}

	/**
	 * Remove tabs from a text
	 *
	 * @param  string $text
	 *
	 * @return string
	 */
	protected function removeTabs($text)
	{
		return str_replace("\t", "", $text);
	}

	/**
	 * Increase tabs on a text
	 *
	 * @param  string  $text
	 * @param  integer $amount Amount of tabs to add
	 *
	 * @return string
	 */
	protected function increaseTabs($text, $amount = 1)
	{
		$lines = array();
		foreach(explode("\n", $text) as $i => $line)
		{
			$lines[] = $i == 0 ? $line : str_repeat("\t", $amount).$line;
		}

		return implode("\n", $lines);
	}

	/**
	 * Turn an array into it's string form
	 *
	 * @param  array $array
	 *
	 * @return string
	 */
	protected function compileArray($array)
	{
		if(empty($array))
		{
			return '';
		}

		$segments = array();
		foreach($array as $key => $value)
		{
			$segments[] = (is_int($key) ? '' : "'".$key."'").(empty($value) ? '' : (is_int($value) ? ' => ' : '')."'".$value."'");
		}

		return "\n\t\t".implode(",\n\t\t", $segments)."\n\t";
	}

	/**
	 * Turn an array of classname strings into use statements
	 *
	 * @param  array $uses
	 *
	 * @return string
	 */
	protected function compileUses($uses)
	{
		if(empty($uses))
		{
			return '';
		}

		asort($uses);

		$uses = array_map(function($use)
		{
			return 'use '.$use.';';
		}, $uses);

		return implode("\n", $uses)."\n";
	}

	/**
	 * Turn a path, namespace and filename into its final form
	 *
	 * @param  string $path      Path of file within the package
	 * @param  string $namespace Namespace of the class
	 * @param  string $fileName  Name of the file
	 *
	 * @return string
	 */
	protected function compileDestination($path, $namespace, $fileName)
	{
		$resource = $this->resource;
		$module = $resource->module;

		$destinationSegments = array(
			base_path(),
			$module->package_path,
			strtolower($module->vendor),
			strtolower($module->name),
			'src'
		);

		if($resource->include_package_namespace && is_null($path))
		{
			$destinationSegments = array_merge($destinationSegments, array(
				$module->vendor,
				$module->name,
				str_replace('\\', '/', $namespace)
			));
		}
		else
		{
			$destinationSegments[] = $path;
		}

		$destinationSegments[] = $fileName;

		return implode('/', $destinationSegments);
	}

	/**
	 * Turn a namespace into a "php usable" one
	 *
	 * @param  string $namespace
	 * @return string
	 */
	protected function compileNamespace($namespace)
	{
		if( ! $namespace)
		{
			return '';
		}

		return ' namespace '.$namespace.";\n";
	}

}
