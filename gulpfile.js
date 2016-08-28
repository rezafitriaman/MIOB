var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber'),
	cssConcat = require('gulp-concat-css'),
	jsConcat = require('gulp-concat'),
	prefix = require('gulp-autoprefixer'),
	imagemin = require('gulp-imagemin');

// concatCss task
//concat css,	
gulp.task('concatCss', function() {
	return gulp.src('assets/css/partcss/*.css')
	.pipe( cssConcat('apps.css'))
	.pipe(gulp.dest('assets/css/'));

});	
// catcatJs task
//concat js,	
gulp.task('concatJs', function() {
	return gulp.src(['assets/js/aos.js','assets/js/bootstrap.min.js','assets/js/functionCall.js'])
	.pipe(jsConcat('apps.js'))
	.pipe(gulp.dest('assets/js/'));

});

// scripts task
//uglifies,
gulp.task('scripts', function() {
	gulp.src('assets/js/partjs/*.js')
	.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest('assets/js'));

});

// styles task
//sass,
gulp.task('styles', function() {
	gulp.src('assets/scss/*.scss')
	.pipe(plumber())
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(prefix({browsers: ['last 2 versions'],cascade: false}))
		.pipe(gulp.dest('assets/css/partcss/'));

});	

// imageCompress task
//imagemin,
gulp.task('image', function() {
	gulp.src('assets/img/*')
	.pipe(imagemin())
	.pipe(gulp.dest('assets/img/imagemin'));

});	


// watch task
//uglifies,
gulp.task('watch', function() {
	gulp.watch('assets/partjs/*.js', ['scripts']);
	gulp.watch('assets/scss/**/*.scss', ['styles']);
});

gulp.task('default', ['scripts', 'styles', 'watch']);