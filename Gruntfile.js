module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    less: {
      development: {
        files: {
          'style.css': 'less/style.less'
        }
      }
    },
    watch: {
      styles: {
        files: '*.less',
        tasks: 'less'
      }
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register tasks
  grunt.registerTask('default', ['less']);
};
