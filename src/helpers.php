<?php

function eval_blade_string($content, $data)
{
	extract($data);

	$compiled = Blade::compileString($content);

	ob_start();

	try {
		eval('?>'.$compiled);
	}
	catch(Exception $e) {
		die("\n\n<h2>".$e->getMessage()."</h2>Error while rendering view with content:<br><br><code>".$content."</code>");
	}

	return ob_get_clean();
}

function eval_blade($file, $data)
{
    $content = file_get_contents($file);

    return eval_blade_string($content, $data);
}
