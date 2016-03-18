'use strict';
module.exports = function(grunt) {
  // Load all tasks
  require('load-grunt-tasks')(grunt);
  // Show elapsed time
  require('time-grunt')(grunt);

  var jsFileList = [
    'assets/js/plugins/*.js',
    'assets/js/_*.js'
  ];

  var jsFrontPageFileList = [
    'assets/js/front-page/plugins/*.js',
    'assets/js/front-page/_*.js'
  ];

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        'assets/js/front-page/*.js',
        '!assets/js/scripts.js',
        '!assets/js/front-page.js',
        '!assets/**/*.min.*'
      ]
    },
    concat: {
      options: {
        separator: ';',
      },
      main: {
        src: [jsFileList],
        dest: 'assets/js/scripts.js',
      },
      home: {
        src: [jsFrontPageFileList],
        dest: 'assets/js/front-page.js',
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [jsFileList],
          'assets/js/front-page.min.js': [jsFrontPageFileList],
          'assets/js/bib-tagging.min.js': 'assets/js/bib-tagging.js',
          'assets/js/vendor/modernizr.min.js': 'assets/vendor/modernizr/modernizr.js'
        }
      }
    },
    compass: {
      dev: {
        options: {
          environment: 'development',
          outputStyle: 'expanded',
          noLineComments: false,
          cssDir: 'assets/css-dev',
          sassDir: 'assets/scss',
          imagesDir: 'assets/img',
          javascriptsDir: 'assets/js',
          relativeAssets: true
        }
      },
      build: {
        options: {
          environment: 'production',
          outputStyle: 'compressed',
          noLineComments: true,
          cssDir: 'assets/css',
          sassDir: 'assets/scss',
          imagesDir: 'assets/img',
          javascriptsDir: 'assets/js',
          relativeAssets: true
        }
      }
    },
    modernizr: {
      build: {
        devFile: 'assets/vendor/modernizr/modernizr.js',
        outputFile: 'assets/js/vendor/modernizr.min.js',
        files: {
          'src': [
            ['assets/js/scripts.min.js'],
            ['assets/js/front-page.min.js'],
            ['assets/css/main.css']
          ]
        },
        tests: ['csstransforms'],
        uglify: true,
        parseFiles: true
      }
    },
    version: {
      default: {
        options: {
          format: true,
          length: 32,
          manifest: 'assets/manifest.json',
          querystring: {
            style: 'roots_css',
            script: 'roots_js'
          }
        },
        files: {
          'lib/scripts.php': 'assets/{css,js,js}/{main,scripts,front-page}.{css,min.js,.min.js}',
          'lib/bib-tagging.php': 'assets/{css,js}/bib-tagging.{css,min.js}',
          'lib/caching.php': 'assets/css/bib-tagging.css'
        }
      }
    },
    watch: {
      compass: {
        files: [
          'assets/scss/*.scss',
          'assets/scss/**/*.scss'
        ],
        tasks: ['compass:dev']
      },
      js: {
        files: [
          jsFileList,
          jsFrontPageFileList,
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'concat']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: true
        },
        files: [
          'assets/css-dev/main.css',
          'assets/js/scripts.js',
          'assets/js/front-page.js',
          'templates/*.php',
          'templates/**/*.php',
          '*.php',
          'lib/front-page.php'
        ]
      }
    }
  });

  // Register tasks
  grunt.registerTask('default', [
    'dev'
  ]);
  grunt.registerTask('dev', [
    'jshint',
    'compass:dev',
    'concat'
  ]);
  grunt.registerTask('build', [
    'jshint',
    'compass:build',
    'uglify',
    'version'
  ]);
};
