<?php namespace Layla\Module\Controllers\Api;

use Layla\Module\Controllers\BaseController;

use Layla\Module\Models\Relation;

class RelationsController extends BaseController {

    /**
     * Create a new RelationsController instance.
     *
     * @param  \Layla\Module\Models\Relation  $model
     * @return void
     */
    public function __construct(Relation $model)
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
