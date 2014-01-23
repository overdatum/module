<?php

$parameters = Parameters::make()
	->add(Parameter::make('property', 'Layla.Module.Blueprints.PropertyBag', DataType::NULL)
		->comment('The property to add'));

return Method::make('add.property', null, DataType::VOID)
	->load('add.property');
