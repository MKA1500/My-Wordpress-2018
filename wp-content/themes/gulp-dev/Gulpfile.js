'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    postcss = require('gulp-postcss'),
    cleanCSS = require('gulp-clean-css');

gulp.task('sass', function () {
  return gulp.src('../mktheme/scss/style.scss')
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
    .pipe(sourcemaps.write('../mktheme/maps'))
    .pipe(gulp.dest('../mktheme'));
});

gulp.task('default', function () {
  gulp.watch('../mktheme/scss/style.scss', ['sass']);
});
