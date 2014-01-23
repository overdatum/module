this["Ember"] = this["Ember"] || {};
this["Ember"]["TEMPLATES"] = this["Ember"]["TEMPLATES"] || {};

this["Ember"]["TEMPLATES"]["application"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, stack2, hashContexts, hashTypes, options, self=this, helperMissing=helpers.helperMissing, escapeExpression=this.escapeExpression;

function program1(depth0,data) {
  
  
  data.buffer.push("<a href=\"packages\">Packages</a>");
  }

function program3(depth0,data) {
  
  
  data.buffer.push("<a href=\"resources\">Resources</a>");
  }

  data.buffer.push("<nav class=\"navbar navbar-default\" role=\"navigation\">\n  <div class=\"navbar-header\">\n    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#module-navbar\">\n      <span class=\"sr-only\">Toggle navigation</span>\n      <span class=\"icon-bar\"></span>\n      <span class=\"icon-bar\"></span>\n      <span class=\"icon-bar\"></span>\n    </button>\n    <a class=\"navbar-brand\" href=\"#\">Layla Module</a>\n  </div>\n\n  <div class=\"collapse navbar-collapse\" id=\"module-navbar\">\n    <ul class=\"nav navbar-nav\">\n      ");
  hashContexts = {'tagName': depth0,'href': depth0};
  hashTypes = {'tagName': "STRING",'href': "BOOLEAN"};
  options = {hash:{
    'tagName': ("li"),
    'href': (false)
  },inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0],types:["STRING"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers['link-to'] || depth0['link-to']),stack1 ? stack1.call(depth0, "modules", options) : helperMissing.call(depth0, "link-to", "modules", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n      ");
  hashContexts = {'tagName': depth0,'href': depth0};
  hashTypes = {'tagName': "STRING",'href': "BOOLEAN"};
  options = {hash:{
    'tagName': ("li"),
    'href': (false)
  },inverse:self.noop,fn:self.program(3, program3, data),contexts:[depth0],types:["STRING"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers['link-to'] || depth0['link-to']),stack1 ? stack1.call(depth0, "resources", options) : helperMissing.call(depth0, "link-to", "resources", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n    </ul>\n  </div>\n</nav>\n\n<div class=\"container\">\n  <div class=\"row\">\n    <div class=\"col-xs-12\">\n      ");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "outlet", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\n    </div>\n  </div>\n</div>\n");
  return buffer;
  
});

this["Ember"]["TEMPLATES"]["modules/dropdown"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, hashTypes, hashContexts, escapeExpression=this.escapeExpression, self=this;

function program1(depth0,data) {
  
  var buffer = '', hashTypes, hashContexts;
  data.buffer.push("\n	<option value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.id", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.vendor", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("/");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</option>\n	");
  return buffer;
  }

  data.buffer.push("<select class=\"form-control\">\n	");
  hashTypes = {};
  hashContexts = {};
  stack1 = helpers.each.call(depth0, "module", "in", "controller.content", {hash:{},inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0,depth0,depth0],types:["ID","ID","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data});
  if(stack1 || stack1 === 0) { data.buffer.push(stack1); }
  data.buffer.push("\n</select>\n");
  return buffer;
  
});

this["Ember"]["TEMPLATES"]["modules/index"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, hashTypes, hashContexts, escapeExpression=this.escapeExpression, self=this;

function program1(depth0,data) {
  
  var buffer = '', hashTypes, hashContexts;
  data.buffer.push("\n      <tr>\n        <td><h4><b>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.vendor", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("/");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</b></h4></td>\n        <td>\n          <small>\n            <dl class=\"dl-horizontal\">\n              <dt>Plural Name</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.plural_name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n            </dl>\n          </small>\n        </td>\n        <td style=\"text-align: right\">\n          <a href=\"#modules.edit/module.id\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i> Edit</a>\n          <a href=\"#modules.destroy/module.id\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i> Delete</a>\n        </td>\n      </tr>\n      ");
  return buffer;
  }

  data.buffer.push("<div class=\"page-header\">\n  <h1>Modules</h1>\n</div>\n<div class=\"table-responsive\">\n  <table class=\"table table-striped table-hover\">\n    <thead>\n      <tr class=\"active\">\n        <th>Name</th>\n        <th>Details</th>\n        <th></th>\n      </tr>\n    </thead>\n    <tbody>\n      ");
  hashTypes = {};
  hashContexts = {};
  stack1 = helpers.each.call(depth0, "module", "in", "model", {hash:{},inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0,depth0,depth0],types:["ID","ID","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data});
  if(stack1 || stack1 === 0) { data.buffer.push(stack1); }
  data.buffer.push("\n    </tbody>\n  </table>\n</div>\n");
  return buffer;
  
});

this["Ember"]["TEMPLATES"]["resources/create"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, stack2, hashTypes, hashContexts, options, escapeExpression=this.escapeExpression, self=this, helperMissing=helpers.helperMissing;

function program1(depth0,data) {
  
  
  data.buffer.push("Back to all resources");
  }

  data.buffer.push("<div class=\"page-header\">\n  <h2>#");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "id", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push(" - ");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</h2>\n</div>\n");
  hashContexts = {'class': depth0,'active': depth0};
  hashTypes = {'class': "STRING",'active': "STRING"};
  options = {hash:{
    'class': ("btn btn-primary"),
    'active': ("false")
  },inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0],types:["STRING"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers['link-to'] || depth0['link-to']),stack1 ? stack1.call(depth0, "resources", options) : helperMissing.call(depth0, "link-to", "resources", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("<br>\n<br>\n<form class=\"form-horizontal\" role=\"form\">\n	<div class=\"panel-group\" id=\"accordion\">\n		<!-- General information -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseGeneral\">\n						General information\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseGeneral\" class=\"panel-collapse collapse in\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Based on</label>\n						<div class=\"col-sm-9\">\n							");
  hashTypes = {};
  hashContexts = {};
  options = {hash:{},contexts:[depth0],types:["STRING"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers.render || depth0.render),stack1 ? stack1.call(depth0, "resources.dropdown", options) : helperMissing.call(depth0, "render", "resources.dropdown", options))));
  data.buffer.push("\n						</div>\n					</div>\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Package</label>\n						<div class=\"col-sm-9\">\n							");
  hashTypes = {};
  hashContexts = {};
  options = {hash:{},contexts:[depth0],types:["STRING"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers.render || depth0.render),stack1 ? stack1.call(depth0, "modules.dropdown", options) : helperMissing.call(depth0, "render", "modules.dropdown", options))));
  data.buffer.push("\n						</div>\n					</div>\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Name</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("name")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Plural name</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"plural_name\" class=\"form-control\" placeholder=\"Plural name\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("plural_name")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Relations -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseRelations\">\n						Relations\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseRelations\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Columns -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseColumns\">\n						Columns\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseColumns\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Controller -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">\n						<input type=\"checkbox\" name=\"create_controller\" value=\"1\"> Create controller?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Controller</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"controllers_base\" class=\"form-control\" placeholder=\"Base Controller\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.base.controllers", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Controller Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"controller_namespace\" class=\"form-control\" placeholder=\"Controller Namespace\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.namespace.controller", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Controller Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"controllers_path\" class=\"form-control\" placeholder=\"Controller Path\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.path.controllers", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Resource Controller -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">\n						<input type=\"checkbox\" name=\"create_resource_controller\" value=\"1\"> Create resource controller?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Resource Controller</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"resource_controllers_base\" class=\"form-control\" placeholder=\"Base Resource Controller\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.base.resource_controllers", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Resource Controller Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"resource_controller_namespace\" class=\"form-control\" placeholder=\"Resource Controller Namespace\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.namespace.resource_controller", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Resource Controller Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"resource_controllers_path\" class=\"form-control\" placeholder=\"Resource Controller Path\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.path.resource_controllers", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Model -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">\n						<input type=\"checkbox\" name=\"create_model\" value=\"1\"> Create model?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseThree\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Model</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"models_base\" class=\"form-control\" placeholder=\"Base Model\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.base.models", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Model Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"model_namespace\" class=\"form-control\" placeholder=\"Model Namespace\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.namespace.model", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Model Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"models_path\" class=\"form-control\" placeholder=\"Model Path\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.path.models", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Migration -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">\n						<input type=\"checkbox\" name=\"create_migration\" value=\"1\"> Create migration?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseFour\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Migration</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"migrations_base\" class=\"form-control\" placeholder=\"Base Migration\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.base.migrations", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Migration Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"migration_namespace\" class=\"form-control\" placeholder=\"Migration Namespace\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.namespace.migration", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Migrations Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"migrations_path\" class=\"form-control\" placeholder=\"Migrations Path\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.path.migrations", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Seed -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFive\">\n						<input type=\"checkbox\" name=\"create_seed\" value=\"1\"> Create seed?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseFive\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Seed</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"seeds_base\" class=\"form-control\" placeholder=\"Base Seed\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.base.seeds", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Seed Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"seed_namespace\" class=\"form-control\" placeholder=\"Seed Namespace\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.namespace.seed", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Seed Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"seeds_path\" class=\"form-control\" placeholder=\"Seed Path\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.path.seeds", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Validator -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseSix\">\n						<input type=\"checkbox\" name=\"create_validator\" value=\"1\"> Create validator?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseSix\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Validator</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"validators_base\" class=\"form-control\" placeholder=\"Base Validator\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.base.validators", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Validator Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"validator_namespace\" class=\"form-control\" placeholder=\"Validator Namespace\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.namespace.validator", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Validator Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"validators_path\" class=\"form-control\" placeholder=\"Validator Path\" value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "config.module.default.path.validators", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n	<br>\n\n	<div class=\"form-group\">\n		<div class=\"col-sm-12\">\n			<button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-ok\"></i> Create resource</button>\n		</div>\n	</div>\n</form>\n\n<script>\n// auto pluralize name\n$('input[name=\"name\"]').keyup(function() {\n	var $pluralNameEl = $('input[name=\"plural_name\"]');\n	$pluralNameEl.val($(this).val() + 's');\n});\n\nfunction baseOnResource(resource)\n{\n	$('input').each(function()\n	{\n		var value = resource[$(this).attr('name')];\n		if(value)\n		{\n			$(this).val(value)\n		}\n		console.log();\n	});\n}\n\n$('select[name=\"based_on\"]').change(function() {\n	var id = $(this).val();\n	for(var i in resources)\n	{\n		var resource = resources[i];\n		if(resource.id == id)\n		{\n			baseOnResource(resource);\n		}\n	}\n});\n\n</script>\n");
  return buffer;
  
});

this["Ember"]["TEMPLATES"]["resources/dropdown"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, hashTypes, hashContexts, escapeExpression=this.escapeExpression, self=this;

function program1(depth0,data) {
  
  var buffer = '', hashTypes, hashContexts;
  data.buffer.push("\n	<option value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.id", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push(" (");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.module.vendor", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("/");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.module.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push(")</option>\n	");
  return buffer;
  }

  data.buffer.push("<select name=\"based_on\" class=\"form-control\">\n	<option value=\"\">Select a resource to autofill</option>\n	");
  hashTypes = {};
  hashContexts = {};
  stack1 = helpers.each.call(depth0, "resource", "in", "controller.content", {hash:{},inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0,depth0,depth0],types:["ID","ID","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data});
  if(stack1 || stack1 === 0) { data.buffer.push(stack1); }
  data.buffer.push("\n</select>\n");
  return buffer;
  
});

this["Ember"]["TEMPLATES"]["resources/edit"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, stack2, hashTypes, hashContexts, options, escapeExpression=this.escapeExpression, self=this, helperMissing=helpers.helperMissing;

function program1(depth0,data) {
  
  
  data.buffer.push("Back to all resources");
  }

function program3(depth0,data) {
  
  var buffer = '', hashTypes, hashContexts;
  data.buffer.push("\n								<option value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.id", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push(" (");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.module.vendor", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("/");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.module.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push(")</option>\n								");
  return buffer;
  }

function program5(depth0,data) {
  
  var buffer = '', hashTypes, hashContexts;
  data.buffer.push("\n								<option value=\"");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.id", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("\">");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.vendor", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("/");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "module.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</option>\n								");
  return buffer;
  }

  data.buffer.push("<div class=\"page-header\">\n  <h2>#");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "id", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push(" - ");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</h2>\n</div>\n");
  hashContexts = {'class': depth0,'active': depth0};
  hashTypes = {'class': "STRING",'active': "STRING"};
  options = {hash:{
    'class': ("btn btn-primary"),
    'active': ("false")
  },inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0],types:["STRING"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers['link-to'] || depth0['link-to']),stack1 ? stack1.call(depth0, "resources", options) : helperMissing.call(depth0, "link-to", "resources", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("<br>\n<br>\n<form class=\"form-horizontal\" role=\"form\">\n	<div class=\"panel-group\" id=\"accordion\">\n		<!-- General information -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseGeneral\">\n						General information\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseGeneral\" class=\"panel-collapse collapse in\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Based on</label>\n						<div class=\"col-sm-9\">\n							<select name=\"based_on\" class=\"form-control\">\n								<option value=\"\">Select a resource to autofill</option>\n								");
  hashTypes = {};
  hashContexts = {};
  stack2 = helpers.each.call(depth0, "resource", "in", "controller.resources", {hash:{},inverse:self.noop,fn:self.program(3, program3, data),contexts:[depth0,depth0,depth0],types:["ID","ID","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data});
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n							</select>\n						</div>\n					</div>\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Package</label>\n						<div class=\"col-sm-9\">\n							<select class=\"form-control\">\n								");
  hashTypes = {};
  hashContexts = {};
  stack2 = helpers.each.call(depth0, "module", "in", "controller.modules", {hash:{},inverse:self.noop,fn:self.program(5, program5, data),contexts:[depth0,depth0,depth0],types:["ID","ID","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data});
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n							</select>\n						</div>\n					</div>\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Name</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("name")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Plural name</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"plural_name\" class=\"form-control\" placeholder=\"Plural name\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("plural_name")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Relations -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseRelations\">\n						Relations\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseRelations\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Columns -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseColumns\">\n						Columns\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseColumns\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Controller -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">\n						<input type=\"checkbox\" name=\"create_controller\" value=\"1\"> Create controller?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Controller</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"controllers_base\" class=\"form-control\" placeholder=\"Base Controller\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("controllers_base")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Controller Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"controller_namespace\" class=\"form-control\" placeholder=\"Controller Namespace\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("controller_namespace")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Controller Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"controllers_path\" class=\"form-control\" placeholder=\"Controller Path\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("controllers_path")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Resource Controller -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">\n						<input type=\"checkbox\" name=\"create_resource_controller\" value=\"1\"> Create resource controller?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Resource Controller</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"resource_controllers_base\" class=\"form-control\" placeholder=\"Base Resource Controller\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("resource_controllers_base")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Resource Controller Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"resource_controller_namespace\" class=\"form-control\" placeholder=\"Resource Controller Namespace\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("resource_controller_namespace")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Resource Controller Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"resource_controllers_path\" class=\"form-control\" placeholder=\"Resource Controller Path\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("resource_controllers_path")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Model -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">\n						<input type=\"checkbox\" name=\"create_model\" value=\"1\"> Create model?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseThree\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Model</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"models_base\" class=\"form-control\" placeholder=\"Base Model\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("models_base")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Model Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"model_namespace\" class=\"form-control\" placeholder=\"Model Namespace\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("model_namespace")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Model Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"models_path\" class=\"form-control\" placeholder=\"Model Path\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("models_path")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Migration -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">\n						<input type=\"checkbox\" name=\"create_migration\" value=\"1\"> Create migration?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseFour\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Migration</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"migrations_base\" class=\"form-control\" placeholder=\"Base Migration\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("migrations_base")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Migration Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"migration_namespace\" class=\"form-control\" placeholder=\"Migration Namespace\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("migration_namespace")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Migrations Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"migrations_path\" class=\"form-control\" placeholder=\"Migrations Path\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("migrations_path")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Seed -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFive\">\n						<input type=\"checkbox\" name=\"create_seed\" value=\"1\"> Create seed?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseFive\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Seed</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"seeds_base\" class=\"form-control\" placeholder=\"Base Seed\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("seeds_base")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Seed Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"seed_namespace\" class=\"form-control\" placeholder=\"Seed Namespace\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("seed_namespace")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Seed Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"seeds_path\" class=\"form-control\" placeholder=\"Seed Path\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("seeds_path")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n		<br>\n\n		<!-- Validator -->\n		<div class=\"panel panel-default\">\n			<div class=\"panel-heading\">\n				<h4 class=\"panel-title\">\n					<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseSix\">\n						<input type=\"checkbox\" name=\"create_validator\" value=\"1\"> Create validator?\n					</a>\n				</h4>\n			</div>\n			<div id=\"collapseSix\" class=\"panel-collapse collapse\">\n				<div class=\"panel-body\">\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Base Validator</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"validators_base\" class=\"form-control\" placeholder=\"Base Validator\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("validators_base")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Validator Namespace</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"validator_namespace\" class=\"form-control\" placeholder=\"Validator Namespace\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("validator_namespace")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n\n					<div class=\"form-group\">\n						<label class=\"col-sm-3 control-label\">Validator Path</label>\n						<div class=\"col-sm-9\">\n							<input type=\"text\" name=\"validators_path\" class=\"form-control\" placeholder=\"Validator Path\" ");
  hashContexts = {'value': depth0};
  hashTypes = {'value': "ID"};
  options = {hash:{
    'value': ("validators_path")
  },contexts:[],types:[],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  data.buffer.push(escapeExpression(((stack1 = helpers['bind-attr'] || depth0['bind-attr']),stack1 ? stack1.call(depth0, options) : helperMissing.call(depth0, "bind-attr", options))));
  data.buffer.push(">\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n	<br>\n\n	<div class=\"form-group\">\n		<div class=\"col-sm-12\">\n			<button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-ok\"></i> Create resource</button>\n		</div>\n	</div>\n</form>\n\n<script>\n// auto pluralize name\n$('input[name=\"name\"]').keyup(function() {\n	var $pluralNameEl = $('input[name=\"plural_name\"]');\n	$pluralNameEl.val($(this).val() + 's');\n});\n\nfunction baseOnResource(resource)\n{\n	$('input').each(function()\n	{\n		var value = resource[$(this).attr('name')];\n		if(value)\n		{\n			$(this).val(value)\n		}\n		console.log();\n	});\n}\n\n$('select[name=\"based_on\"]').change(function() {\n	var id = $(this).val();\n	for(var i in resources)\n	{\n		var resource = resources[i];\n		if(resource.id == id)\n		{\n			baseOnResource(resource);\n		}\n	}\n});\n\n</script>\n");
  return buffer;
  
});

this["Ember"]["TEMPLATES"]["resources/index"] = Ember.Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Ember.Handlebars.helpers); data = data || {};
  var buffer = '', stack1, hashTypes, hashContexts, escapeExpression=this.escapeExpression, self=this, helperMissing=helpers.helperMissing;

function program1(depth0,data) {
  
  var buffer = '', stack1, stack2, hashTypes, hashContexts, options;
  data.buffer.push("\n      <tr>\n        <td><h4><b>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</b></h4></td>\n        <td>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.module.vendor", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("/");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.module.name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</td>\n        <td>\n          <small>\n            <dl class=\"dl-horizontal\">\n              <dt>Plural Name</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.plural_name", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n            </dl>\n          </small>\n\n          <small>\n            <dl class=\"dl-horizontal\">\n              <dt>Base Controller</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.controllers_base", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Base Resource Controller</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.resource_controllers_base", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Base Model</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.models_base", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Base Migration</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.migrations_base", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Base Seed</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.seeds_base", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Base Validator</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.validator_base", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n            </dl>\n          </small>\n\n          <small>\n            <dl class=\"dl-horizontal\">\n              <dt>Controller Namespace</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.controller_namespace", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Resource Namespace Controller</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.resource_controller_namespace", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Model Namespace</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.model_namespace", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Seed Namespace</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.seed_namespace", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Validator Namespace</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.validator_namespace", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n            </dl>\n          </small>\n\n          <small>\n            <dl class=\"dl-horizontal\">\n              <dt>Controller Path</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.controllers_path", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Resource Path Controller</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.resource_controllers_path", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Model Path</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.models_path", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Migration Path</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.migrations_path", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Seed Path</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.seeds_path", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n              <dt>Validator Path</dt>\n              <dd>");
  hashTypes = {};
  hashContexts = {};
  data.buffer.push(escapeExpression(helpers._triageMustache.call(depth0, "resource.validators_path", {hash:{},contexts:[depth0],types:["ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data})));
  data.buffer.push("</dd>\n            </dl>\n          </small>\n        </td>\n        <td style=\"text-align: right\">\n          ");
  hashContexts = {'class': depth0};
  hashTypes = {'class': "STRING"};
  options = {hash:{
    'class': ("btn btn-primary")
  },inverse:self.noop,fn:self.program(2, program2, data),contexts:[depth0,depth0],types:["STRING","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers['link-to'] || depth0['link-to']),stack1 ? stack1.call(depth0, "resources.edit", "resource", options) : helperMissing.call(depth0, "link-to", "resources.edit", "resource", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n          ");
  hashContexts = {'class': depth0};
  hashTypes = {'class': "STRING"};
  options = {hash:{
    'class': ("btn btn-danger")
  },inverse:self.noop,fn:self.program(4, program4, data),contexts:[depth0,depth0],types:["STRING","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data};
  stack2 = ((stack1 = helpers['link-to'] || depth0['link-to']),stack1 ? stack1.call(depth0, "resources.destroy", "resource", options) : helperMissing.call(depth0, "link-to", "resources.destroy", "resource", options));
  if(stack2 || stack2 === 0) { data.buffer.push(stack2); }
  data.buffer.push("\n        </td>\n      </tr>\n      ");
  return buffer;
  }
function program2(depth0,data) {
  
  
  data.buffer.push("<i class=\"glyphicon glyphicon-edit\"></i> Edit");
  }

function program4(depth0,data) {
  
  
  data.buffer.push("<i class=\"glyphicon glyphicon-trash\"></i> Delete");
  }

  data.buffer.push("<div class=\"page-header\">\n  <h1>Resources</h1>\n</div>\n<div class=\"table-responsive\">\n  <table class=\"table table-striped table-hover\">\n    <thead>\n      <tr class=\"active\">\n        <th>name Name</th>\n        <th>module.vendor module.name Module</th>\n        <th>Details</th>\n        <th></th>\n      </tr>\n    </thead>\n    <tbody>\n      ");
  hashTypes = {};
  hashContexts = {};
  stack1 = helpers.each.call(depth0, "resource", "in", "model", {hash:{},inverse:self.noop,fn:self.program(1, program1, data),contexts:[depth0,depth0,depth0],types:["ID","ID","ID"],hashContexts:hashContexts,hashTypes:hashTypes,data:data});
  if(stack1 || stack1 === 0) { data.buffer.push(stack1); }
  data.buffer.push("\n    </tbody>\n  </table>\n</div>\n");
  return buffer;
  
});