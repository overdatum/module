// This is the main application configuration file.  It is a Grunt
// configuration file, which you can learn more about here:
// https://github.com/cowboy/grunt/blob/master/docs/configuring.md
module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-ember-handlebars');

  grunt.initConfig({
    // The lint task will run the build configuration and the application
    // JavaScript through JSHint and report any errors.  You can change the
    // options for this task, by reading this:
    // https://github.com/cowboy/grunt/blob/master/docs/task_lint.md
    lint: {
      files: [
        "build/config.js", "application/**/*.js"
      ]
    },

    // The jshint option for scripturl is set to lax, because the anchor
    // override inside main.js needs to test for them so as to not accidentally
    // route.
    jshint: {
      options: {
        scripturl: true
      }
    },

    // This task uses the MinCSS Node.js project to take all your CSS files in
    // order and concatenate them into a single CSS file named index.css.  It
    // also minifies all the CSS as well.  This is named index.css, because we
    // only want to load one stylesheet in index.html.
    mincss: {
      "dist/release/assets/css/index.css": [
        "dist/debug/assets/css/index.css"
      ]
    },

    // Takes the built require.js file and minifies it for filesize benefits.
    min: {
      "dist/release/require.js": [
        "dist/debug/require.js"
      ]
    },

    // The watch task can be used to monitor the filesystem and execute
    // specific tasks when files are modified.  By default, the watch task is
    // available to compile CSS if you are unable to use the runtime compiler
    // (use if you have a custom server, PhoneGap, Adobe Air, etc.)
    watch: {
      files: ["grunt.js", "vendor/**/*", "application/**/*"],
      tasks: "styles"
    },

    ember_handlebars: {
      compile: {
        options: {
          namespace: "Ember.TEMPLATES",
          processName: function(filename) {
            var parts = filename.split('/');
            var file = parts[parts.length - 1].replace('.hbs', '');
            var dir = parts[parts.length - 2];
            if(file === dir || file === 'application') {
              return file;
            }
            return dir + '/' + file;
          }
        },
        files: {
          "public/js/templates.js": "src/views/**/*.hbs"
        }
      }
    }
  });

  // The debug task will remove all contents inside the dist/ folder, lint
  // all your code, precompile all the underscore templates into
  // dist/debug/templates.js, compile all the application code into
  // dist/debug/require.js, and then concatenate the require/define shim
  // almond.js and dist/debug/templates.js into the require.js file.
  grunt.registerTask("debug", "ember_handlebars");

  // The release task will run the debug tasks and then minify the
  // dist/debug/require.js file and CSS files.
  grunt.registerTask("release", "debug");

};
