/*
 * Default gulp taskbuilder for Titan
 */

// gulp node_module imports
var gulp = require('gulp'),
	sass = require('gulp-ruby-sass'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	imagemin = require('gulp-imagemin'),
	jpegcompress = require('imagemin-jpeg-recompress');

// gulp watcher
gulp.task('watch', function(){
	gulp.watch('dev/sass/**/*.scss', ['sass']);
	gulp.watch('dev/javascripts/**/*.js', ['scripts']);
	gulp.watch('dev/images/**/*', ['compress', 'compressjpeg']);
});

// compass pre-processor
gulp.task('sass', function(){
	sass('dev/sass', { compass: true, style: 'compressed' })
	.pipe(gulp.dest('app/stylesheets'));
});

// minify(uglify)and merge(concat) javascript files
gulp.task('scripts', function(){
	// Order of concat here as array
	gulp.src([
			'dev/javascripts/jquery.appear.js', 
			'dev/javascripts/progressbar.min.js',
			'dev/javascripts/progressbar-custom.js',
			'dev/javascripts/dropdownsearch.js',
			'dev/javascripts/responsivemenu.js',
			'dev/javascripts/owl.carousel.js',
			'dev/javascripts/owl.custom.js',
			'dev/javascripts/jquery.selectric.js',
			'dev/javascripts/jquery.tabs.js',
			'dev/javascripts/sidebar.sliders.js',
			'dev/javascripts/countrydropdown.js',
			'dev/javascripts/back-to-top.js',
			'dev/javascripts/readmore.js',
			'dev/javascripts/readmore-custom.js',
		])
		.pipe(uglify())
		.pipe(concat('concatenation.js'))
		.pipe(gulp.dest('app/javascripts'));
});

// Compress images
gulp.task('compress', function(){
	gulp.src('dev/images/*')
		.pipe(imagemin({ progressive: true }))
		.pipe(gulp.dest('app/images'))
});

// jpeg compressor - crunch those huge hero images.
gulp.task('compressjpeg', function(){
	// to watch multipe file extensions pass an array to gulp.src()
    gulp.src(['dev/images/**/*.jpeg', 'dev/images/**/*.jpg'])
        .pipe(jpegcompress({ loops: 5 })())
        .pipe(gulp.dest('app/images'));
});

// default task - watches and runs all task atleast once on startup of gulp
gulp.task('default', ['watch', 'sass', 'scripts', 'compress', 'compressjpeg']);