module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    dest: grunt.option('dest') || 'dist',
    copy: {
      dist: {
        src: ['**/*', '!**/less/**'],
        dest: '<%= dest %>/pinata/',
        expand: true,
        cwd: 'src/'
      }
    },
    less: {
      all: {
        files: {
          'src/style.css': 'src/less/style.less'
        }
      }
    },
    watch: {
      styles: {
        files: 'less/*.less',
        tasks: 'less'
      }
    },
    compress: {
      dist: {
        src: ['<%= dest %>/**']
      },
      options: {
        archive: '<%= dest %>/pinata.zip',
        mode: 'zip'
      }
    },
    clean: {
      all: ['<%= dest %>/']
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-clean');

  // Register tasks
  grunt.registerTask('default', [
    'less',
    'copy'
  ]);

  grunt.registerTask('package', [
    'default',
    'compress'
  ]);
};
