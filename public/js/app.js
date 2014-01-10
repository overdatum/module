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

App.ResourcesIndexRoute = Ember.Route.extend({
	model: function() {
		return $.get('/api/resources');
	}
});

App.ModulesIndexRoute = Ember.Route.extend({
	model: function() {
		return $.get('/api/modules');
	}
});
