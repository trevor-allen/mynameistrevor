/* jshint node: true */
"use strict";

var gulp = require( "gulp" ),
	/** @type {Object} Loader of Gulp plugins from `package.json` */
	$ = require( "gulp-load-plugins" )(),
	/** @type {Array} JS source files to concatenate and uglify */
	uglifySrc = [
		"js/navigation.js",
		"js/skip-link-focus-fix.js",
		"js/velocity.min.js",
		"js/velocity.ui.min.js",
		"js/bower_components/fittext/fittext.js",
		"js/bower_components/fastclick/lib/fastclick.js",
		"js/main.js"
	],
	/** @type {Array} CSS source files to concatenate and minify */
	cssminSrc = [
		"style.css",
	];

/** CSS Preprocessors */
gulp.task( "sass", function () {
	return gulp.src( "sass/style.scss" )
		.pipe( $.rubySass({
			loadPath: process.cwd(),
			require: ["breakpoint", "susy"],
			style: "expanded",
			precision: 10
		}))
		.pipe( $.autoprefixer( "last 20 version", "ie >= 9" ) )
		.on( "error", function( e ) {
			console.error( e );
		})
		.pipe( gulp.dest( "." ) );
});


/** Uglify */
gulp.task( "uglify", function() {
	return gulp.src( uglifySrc )
		.pipe( $.concat( "app.min.js" ) )
		.pipe( $.uglify() )
		.pipe( gulp.dest( "js/min" ) );
});

/** Livereload */
gulp.task( "watch", [ "sass", "uglify" ], function() {

	gulp.watch( [
	"js/*.js"
], [ "uglify" ] );

	/** Watch for autoprefix */
	gulp.watch( [
		"sass/**/*.scss"
	], [ "sass" ] );

});

