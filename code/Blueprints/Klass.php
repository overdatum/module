<?php

TemplateLoader::path(__DIR__);

$properties = Properties::make()
	->load(array(
		'name'
	))

$methods = Methods::make()
	->load(array(
		'constructor',
		'add.property',
		'add.method'
	));

return Klass::make('Klass', $properties, $methods);
