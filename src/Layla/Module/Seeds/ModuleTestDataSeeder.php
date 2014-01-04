<?php namespace Layla\Module\Seeds;

use Seeder;

use Layla\Module\Models\Module;
use Layla\Module\Models\Resource;
use Layla\Module\Models\Column;
use Layla\Module\Models\Relation;

class ModuleTestDataSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$module = Module::create(array(
			'vendor' => 'Example',
			'name' => 'Application',
			'package_dir' => 'workbench',
		));

		$resources = array(
			'user' => Resource::create(array(
				'previous_version_id' => null,
				'module_id' => $module->id,
				'extends' => null,
				'include_package_namespace' => true,
				'name' => 'User',
				'plural_name' => 'Users',
				'description' => 'Users',
				'controllers_base' => null,
				'resource_controllers_base' => null,
				'models_base' => null,
				'migrations_base' => null,
				'seeds_base' => null,
				'validator_base' => null,
				'controller_namespace' => 'User\Controllers',
				'resource_controller_namespace' => 'User\Controllers\Api',
				'model_namespace' => 'User\Models',
				'seed_namespace' => 'User\Seeds',
				'validator_namespace' => 'User\Validators',
				'controllers_path' => null,
				'resource_controllers_path' => null,
				'models_path' => null,
				'migrations_path' => null,
				'seeds_path' => null,
				'validators_path' => null,
				'validator' => null,
				'index_validator' => 'IndexValidator',
				'store_validator' => 'StoreValidator',
				'show_validator' => 'ShowValidator',
				'update_validator' => 'UpdateValidator',
				'rules' => '{"email": "required|email", "name": "required"}',
				'index_rules' => null,
				'store_rules' => null,
				'show_rules' => null,
				'update_rules' => null
			)),
			'page' => Resource::create(array(
				'previous_version_id' => null,
				'module_id' => $module->id,
				'extends' => null,
				'include_package_namespace' => true,
				'name' => 'Page',
				'plural_name' => 'Pages',
				'description' => 'Pages',
				'controllers_base' => null,
				'resource_controllers_base' => null,
				'models_base' => null,
				'migrations_base' => null,
				'seeds_base' => null,
				'validator_base' => null,
				'controller_namespace' => 'Page\Controllers',
				'resource_controller_namespace' => 'Page\Controllers\Api',
				'model_namespace' => 'Page\Models',
				'seed_namespace' => 'Page\Seeds',
				'validator_namespace' => 'Page\Validators',
				'controllers_path' => null,
				'resource_controllers_path' => null,
				'models_path' => null,
				'migrations_path' => null,
				'seeds_path' => null,
				'validators_path' => null,
				'validator' => null,
				'index_validator' => 'IndexValidator',
				'store_validator' => 'StoreValidator',
				'show_validator' => 'ShowValidator',
				'update_validator' => 'UpdateValidator',
				'rules' => '{"active_from": "required|date", "active_to": "required|date"}',
				'index_rules' => null,
				'store_rules' => null,
				'show_rules' => null,
				'update_rules' => null
			)),
			'tag' => Resource::create(array(
				'previous_version_id' => null,
				'module_id' => $module->id,
				'extends' => null,
				'include_package_namespace' => true,
				'name' => 'Tag',
				'plural_name' => 'Tags',
				'description' => 'Tags',
				'controllers_base' => null,
				'resource_controllers_base' => null,
				'models_base' => null,
				'migrations_base' => null,
				'seeds_base' => null,
				'validator_base' => null,
				'controller_namespace' => 'Tag\Controllers',
				'resource_controller_namespace' => 'Tag\Controllers\Api',
				'model_namespace' => 'Tag\Models',
				'seed_namespace' => 'Tag\Seeds',
				'validator_namespace' => 'Tag\Validators',
				'controllers_path' => null,
				'resource_controllers_path' => null,
				'models_path' => null,
				'migrations_path' => null,
				'seeds_path' => null,
				'validators_path' => null,
				'validator' => null,
				'index_validator' => 'IndexValidator',
				'store_validator' => 'StoreValidator',
				'show_validator' => 'ShowValidator',
				'update_validator' => 'UpdateValidator',
				'rules' => '{"email": "required|email", "name": "required"}',
				'index_rules' => null,
				'store_rules' => null,
				'show_rules' => null,
				'update_rules' => null
			)),
			'roles' => Resource::create(array(
				'previous_version_id' => null,
				'module_id' => $module->id,
				'extends' => null,
				'include_package_namespace' => true,
				'name' => 'Role',
				'plural_name' => 'Roles',
				'description' => 'Roles',
				'controllers_base' => null,
				'resource_controllers_base' => null,
				'models_base' => null,
				'migrations_base' => null,
				'seeds_base' => null,
				'validator_base' => null,
				'controller_namespace' => 'Role\Controllers',
				'resource_controller_namespace' => 'Role\Controllers\Api',
				'model_namespace' => 'Role\Models',
				'seed_namespace' => 'Role\Seeds',
				'validator_namespace' => 'Role\Validators',
				'controllers_path' => null,
				'resource_controllers_path' => null,
				'models_path' => null,
				'migrations_path' => null,
				'seeds_path' => null,
				'validators_path' => null,
				'validator' => null,
				'index_validator' => 'IndexValidator',
				'store_validator' => 'StoreValidator',
				'show_validator' => 'ShowValidator',
				'update_validator' => 'UpdateValidator',
				'rules' => '{"email": "required|email", "name": "required"}',
				'index_rules' => null,
				'store_rules' => null,
				'show_rules' => null,
				'update_rules' => null
			)),
		);

		foreach($resources as $identifier => $resource)
		{
			$columns = array(
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => 'something_else_id',
					'type' => 'integer',
					'size' => null,
					'precision' => null,
					'default' => null,
					'fillable' => true,
				))->id,
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => 'active_from',
					'type' => 'timestamps',
					'size' => null,
					'precision' => null,
					'default' => 'NOW()',
					'fillable' => true,
				))->id,
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => 'active_to',
					'type' => 'timestamps',
					'size' => null,
					'precision' => null,
					'default' => 'NOW()',
					'fillable' => true,
				))->id,
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => 'name',
					'type' => 'string',
					'size' => null,
					'precision' => null,
					'default' => null,
					'fillable' => true,
				))->id,
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => 'description',
					'type' => 'text',
					'size' => null,
					'precision' => null,
					'default' => null,
					'fillable' => true,
				))->id,
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => null,
					'type' => 'timestamps',
					'size' => null,
					'precision' => null,
					'default' => null,
					'fillable' => true,
				))->id,
				Column::create(array(
					'previous_version_id' => null,
					'resource_id' => $resource->id,
					'name' => 'price',
					'type' => 'decimal',
					'size' => 5,
					'precision' => 2,
					'default' => null,
					'fillable' => true,
				))->id
			);

			if($identifier == 'user')
			{
				$relations = array(
					Relation::create(array(
						'resource_id' => $resource->id,
						'other_resource_id' => $resources['page']->id,
						'type' => 'hasmany',
						'name' => 'pages',
						'morph_key' => null
					))->id
				);
			}
			if($identifier == 'page')
			{
				$relations = array(
					Relation::create(array(
						'resource_id' => $resource->id,
						'other_resource_id' => $resources['user']->id,
						'type' => 'belongsto',
						'name' => 'author',
						'morph_key' => null
					))->id,
					Relation::create(array(
						'resource_id' => $resource->id,
						'other_resource_id' => $resources['tag']->id,
						'type' => 'morphmany',
						'name' => 'tags',
						'morph_key' => 'taggable'
					))->id
				);
			}
			if($identifier == 'tag')
			{
				$relations = array(
					Relation::create(array(
						'resource_id' => $resource->id,
						'other_resource_id' => null,
						'type' => 'morphto',
						'name' => 'taggable',
						'morph_key' => null
					))->id
				);
			}
		}

	}

}
