<?php namespace Layla\Module\Blueprints\Language;

use Illuminate\Support\Collection;

class Properties extends Collection {

	public function compile()
	{
		return implode("\n\n", array_map(function($item)
		{
			return $item->getCompiler()
				->compile();
		}, $this->items));
	}

}
