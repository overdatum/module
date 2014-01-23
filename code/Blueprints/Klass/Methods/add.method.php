<?php

$parameters = Parameters::make()
	->add(Parameter::make('method', 'Layla.Module.Blueprints.Method', DataType::NULL)
		->comment('The method to add'));

return Method::make('add.method', null, DataType::VOID)
	->load('add.method');
