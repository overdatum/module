<?php

function eval_blade($file, $data)
{
    extract($data);

    $content = file_get_contents($file);
    $compiled = Blade::compileString($content);

    ob_start();
    eval('?>'.$compiled);

    return ob_get_clean();
}

function layla_module_stubs_path()
{
	return __DIR__.'/stubs/';
}

if ( ! function_exists('de'))
{
	/**
	 * Escape HTML entities in a string.
	 *
	 * @param  string  $value
	 * @return string
	 */
	function de($value)
	{
		return html_entity_decode($value, ENT_QUOTES, 'UTF-8');
	}
}
