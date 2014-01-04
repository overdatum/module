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
