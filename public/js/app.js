App = Ember.Application.create();

App.Router.map(function() {
	this.resource('modules', function() {
		this.route('create');
		this.route('edit', {path: '/:module_id/edit'});
	});

	this.resource('resources', function() {
		this.route('create');
		this.route('edit', {path: '/:resource_id/edit'});
		this.route('destroy', {path: '/:resource_id/destroy'});
	});
});

App.Router.reopen({
  location: 'history',
  rootURL: '/module'
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
  namespace: 'api'
});

App.Resource = DS.Model.extend({
	module: DS.belongsTo('module'),

	previous_version_id: DS.attr('string'),
	module_id: DS.attr('string'),
	extends: DS.attr('string'),
	include_package_namespace: DS.attr('string'),
	name: DS.attr('string'),
	plural_name: DS.attr('string'),
	description: DS.attr('string'),
	controllers_base: DS.attr('string'),
	resource_controllers_base: DS.attr('string'),
	models_base: DS.attr('string'),
	migrations_base: DS.attr('string'),
	seeds_base: DS.attr('string'),
	validator_base: DS.attr('string'),
	controller_namespace: DS.attr('string'),
	resource_bontroller_namespace: DS.attr('string'),
	model_namespace: DS.attr('string'),
	seed_namespace: DS.attr('string'),
	validator_namespace: DS.attr('string'),
	controllers_path: DS.attr('string'),
	resource_controllers_path: DS.attr('string'),
	models_path: DS.attr('string'),
	migrations_path: DS.attr('string'),
	seeds_path: DS.attr('string'),
	validators_path: DS.attr('string'),
	validator: DS.attr('string'),
	index_validator: DS.attr('string'),
	store_validator: DS.attr('string'),
	show_validator: DS.attr('string'),
	update_validator: DS.attr('string'),
	rules: DS.attr('string'),
	index_rules: DS.attr('string'),
	store_rules: DS.attr('string'),
	show_rules: DS.attr('string'),
	update_rules: DS.attr('string'),
});

App.ResourceSerializer = DS.RESTSerializer.extend({
    extractSingle: function (store, primaryType, payload) {
    	var resource = payload.resource[0];
    	var modules = [];

    	var module = resource.module,
    	    moduleId = module.id;

    	modules.push(module);
    	resource.module = moduleId;
    	payload.modules = modules;

    	return this._super(store, primaryType, payload);
    },
    extractArray: function(store, type, payload, id, requestType) {
        var resources = payload.resource;
        var modules = [];
        console.log(payload);
        resources.forEach(function(resource){
            var module = resource.module,
                moduleId = module.id;

            modules.push(module);
            resource.module = moduleId;
        });
        payload.modules = modules;

        return this._super(store, type, payload, id, requestType);
    }
});

App.Module = DS.Model.extend({
	resource: DS.hasMany('resource'),

	vendor: DS.attr('string'),
	name: DS.attr('string'),
	package_dir: DS.attr('string'),
});

App.ResourcesIndexRoute = Ember.Route.extend({
	model: function() {
		return this.store.find('resource');
	}
});

App.ModulesIndexRoute = Ember.Route.extend({
	model: function() {
		return this.store.find('module');
	}
});

App.ResourcesEditRoute = Ember.Route.extend({
	model: function(params) {
		console.log('model hook');
		return this.store.find('resource', params.resource_id);
	},

	setupController: function(controller, model) {
		controller.set('model', model);
		controller.set('resources', this.store.find('resource'));
		controller.set('modules', this.store.find('module'));
	}
});
