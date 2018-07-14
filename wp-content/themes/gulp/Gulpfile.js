var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    postcss = require('gulp-postcss'),
    cleanCSS = require('gulp-clean-css'),
    root = '../mktheme/',
    css = root,
    scss = root + 'sass/';

gulp.task('css', function() {
	return gulp.src(scss + '{main.scss,style.scss}')
	.pipe(sourcemaps.init())
	.pipe(sass({
		outputStyle: 'expanded',
		indentType: 'tab',
		indentWidth: '1'
	}).on('error', sass.logError))
	.pipe(postcss([
		autoprefixer('last 2 versions', '> 1%')
	]))
	.pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(sourcemaps.write(scss + 'maps'))
	.pipe(gulp.dest(root));
});

gulp.task('watch', function() {
	gulp.watch([root + '*.css', root + '**/*.scss' ], ['css']);
});

gulp.task('default', ['watch']);
