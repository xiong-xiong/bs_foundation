//This Gulpfile is for WP projects.
//Using this requires readjusting wp style.css imports to go to dist folder. Also relink all files to those files on dist folder

var gulp   = require('gulp'),
		browserSync = require('browser-sync'),
		reload = browserSync.reload,
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat'),
		imageMin = require('gulp-imagemin'),
		minifyCSS = require('gulp-clean-css'),
		plumber = require('gulp-plumber'),
		sass = require('gulp-sass'),
		sourcemaps = require('gulp-sourcemaps'),
		uglify = require('gulp-uglify');

gulp.task('bs', function() {
	browserSync.init({

    proxy: 'http://localhost:8888/beardStore'
	});
});

gulp.task('styles', function() {
	return gulp.src('scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(minifyCSS())
		.pipe(concat('styles.css'))
		.pipe(autoprefixer('last 5 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./dist'))
		.pipe(reload({ stream: true }));
});

gulp.task('scripts', function () {
	return gulp.src('js/*.js')
		.pipe(concat('main.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./dist'))
		.pipe(reload({stream:true}));
});

gulp.task('images', function () {
	return gulp.src('./images/**/*')
		.pipe(imageMin())
		.pipe(gulp.dest('./images'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	gulp.watch('scss/**/*.scss', ['styles', reload]);
	gulp.watch('js/*.js', ['scripts']);
	gulp.watch('./**/*.php', reload);
});

gulp.task('default', ['styles', 'scripts', 'images', 'bs', 'watch']);
