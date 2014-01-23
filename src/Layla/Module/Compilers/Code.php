<?php namespace Layla\Module\Compilers;

use Layla\Module\TemplateLoader;

/**
 * Base class for every language's base compiler
 */
class Code {

	/**
	 * Set the file loader for loading templates
	 *
	 * @param  TemplateLoader $loader
	 *
	 * @return self
	 */
	public function loader(TemplateLoader $loader)
	{
		$this->loader = $loader;

		return $this;
	}

	/**
	 * Compile an array of arrays into a evenly spaced table
	 *
	 * @param  array   $rows    The rows of the table
	 * @param  integer $padding Amount of spaces to add as padding
	 *
	 * @return string
	 */
	protected function compileTable($rows, $padding = 1)
	{
		$maxLengthPerColumn = array();
		foreach($rows as $columns)
		{
			foreach($columns as $i => $value)
			{
				$length = strlen($value);
				if( ! isset($maxLengthPerColumn[$i]) || $maxLengthPerColumn[$i] < $length)
				{
					$maxLengthPerColumn[$i] = $length;
				}
			}
		}

		$content = "";
		foreach($rows as $columns)
		{
			foreach($columns as $i => $value)
			{
				$content .= sprintf("%-".($maxLengthPerColumn[$i] + $padding)."s", $value);
			}

			$content .= "\n";
		}

		return $content;
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
	protected function indent($text, $amount = 1)
	{
		$lines = array();
		foreach(explode("\n", $text) as $i => $line)
		{
			$lines[] = str_repeat("\t", $amount).$line;
		}

		return implode("\n", $lines);
	}

}
