/*global module:true */

module.exports = function(grunt) {
	'use strict';

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		ie9_selector_counter: {
			all: [
				'stylesheets/screen.css'
			]
		},

		jscs: {
			src: '<%= jshint.all %>',
			'excludeFiles': [
				'node_modules/**'
			]
		},

		jshint: {
			all: [
				'Gruntfile.js',
				'js/main.js'
			],
			options: {
				jshintrc: true
			}
		},

		uglify: {
			dev: {
				options: {
					banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
					preserveComments: 'some',
					beautify: true,
					compress: false,
					mangle: false
				},
				files: {
					'js/build/modernizr.js': [
						'static/src/vendor/modernizr-2.6.2.min.js'
					],
					'js/build/main.min.js': [
						'js/vendor/jquery-2.1.3.js',
						'js/vendor/foundation.min.js',
						'js/vendor/magnific-popup.min.js',
				//		'js/vendor/paper-full.min.js',
						'js/main.js'
					]
				}
			},
			dist: {
				options: {
					banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
					preserveComments: 'some'
				},
				files: {
					'js/build/modernizr.js': [
						'js/vendor/modernizr-2.6.2.min.js'
					],
					'js/build/main.min.js': [
						'js/vendor/jquery-2.1.3.js',
						'js/vendor/foundation.min.js',
						'js/vendor/magnific-popup.min.js',
					//	'js/vendor/paper-full.min.js',
						'js/modules/*.js',
						'js/main.js'
					]
				}
			}
		},

		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'stylesheets',
					environment: 'production'
				}
			},

			dev: {
				options: {
					sassDir: 'sass',
					cssDir: 'stylesheets'
				}
			}
		},

		watch: {

			js: {
				files: [
					'js/**/*.js'
				],
				tasks: [
					'jshint',
					'jscs',
					'uglify:dev'
				]
			},

			css: {
				files: [ 'sass/**/*.scss' ],
				tasks: [ 'compass:dev' ]
			}
		}
	});

	grunt.loadNpmTasks('grunt-ie9-selector-counter');
	grunt.loadNpmTasks('grunt-jscs');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');

	grunt.registerTask('default', [
		'compass:dist',
		//'ie9_selector_counter',
		'jshint',
		'uglify:dist'
	]);

};
