/* jshint node: true */
"use strict";

var gulp = require( "gulp" ),
$ = require( "gulp-load-plugins" )(),
uglifySrc = [
	"js/imagesloaded.pkgd.min.js",
	"js/inview.js",
	"js/jPushMenu.js",
	"js/mynameistrevor.scripts.js",
	"js/navigation.js",
	"js/skip-link-focus-fix.js"
],
cssminSrc = [
	"style.css",
];

gulp.task('sass', function () {
	gulp.src('sass/style.scss')
	.pipe( $.sass({outputStyle: 'compressed'}).on('error', $.sass.logError) )
	.pipe( $.autoprefixer( "last 20 version", "ie >= 9" ) )
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
