module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    less: {
      development: {
        files: {
          'style.css': 'style.less'
        }
      }
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-less');

  // Register tasks
  grunt.registerTask('default', ['less']);
};
