<?php namespace Layla\Module\Generators;

use Illuminate\Support\Facades\Blade;

class Generator {

	/**
	 * The blueprint to use
	 *
	 * @var \Layla\Module\Blueprints\Blueprint
	 */
	protected $blueprint;

	/**
	 * Location of the stub
	 *
	 * @var string
	 */
	protected $stub;

	/**
	 * Create a new Generator instance
	 *
	 * @param Blueprint $blueprint
	 */
	public function __construct(Blueprint $blueprint)
	{
		$this->blueprint = $blueprint;
	}

	/**
	 * Generate the file
	 *
	 * @return boolean Could we save it?
	 */
	public function generate()
	{
		$result = $this->generateString();

		$destination = $this->blueprint->getDestination();
		$pathInfo = pathinfo($destination);
		$directory = $pathInfo['dirname'];

		// try to make sure that the destination exists
		@mkdir($directory, 0755, true);

		// store the result
		return file_put_contents($destination, $result);
	}

	/**
	 * Get the generated string
	 *
	 * @return string
	 */
	public function generateString()
	{
		$blueprint = $this->blueprint;
		$destination = $blueprint->getDestination();
		$data = $blueprint->getAttributes();

		$data = array_merge($data, compact('blueprint', 'destination'));

		return '<?php'.eval_blade(layla_module_stubs_path().$this->stub, $data);
	}

}
