<?php namespace Layla\Module\Controllers\Api;

use Layla\Module\Controllers\Api\BaseController;

use Layla\Module\Models\Module;

class ModuleController extends BaseController {

    /**
     * Create a new ModuleController instance.
     *
     * @param  \Layla\Module\Models\Module  $model
     * @return void
     */
    public function __construct(Module $model)
    {
        $this->model = $model;
    }

    /**
     * Scopes to execute by default
     *
     * @var array
     */
    protected $scopes = array();

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = array();

    /**
     * Validation rules used when getting a list of resources
     *
     * @var array
     */
    protected $indexRules = array();

    /**
     * Validation rules used when storing a resource
     *
     * @var array
     */
    protected $storeRules = array();

    /**
     * Validation rules used when getting a resource
     *
     * @var array
     */
    protected $showRules = array();

    /**
     * Validation rules used when updating a resource
     *
     * @var array
     */
    protected $updateRules = array();

}
