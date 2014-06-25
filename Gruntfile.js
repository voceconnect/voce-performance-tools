/*
 * voce-performance-tools
 * https://github.com/voceconnect/voce-performance-tools
 */

'use strict';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    "build": {
      "production": ["composer:install:no-dev:optimize-autoloader:prefer-dist"],
    }
  });

  //load the tasks
  grunt.loadNpmTasks('grunt-voce-plugins');

};