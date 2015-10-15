var gulp = require('gulp');

var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var jade = require('gulp-jade');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var sass = require('gulp-sass');



gulp.task('sass', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(minifyCSS())
    .pipe(rename('style.css'))
    .pipe(gulp.dest(''));
});

gulp.task('html', function() {
  gulp.src('source/jade/*.jade')
    .pipe(jade())
    .pipe(gulp.dest('build'))
});
gulp.task('js', function() {
  gulp.src([
    'js/*'
  ])
    .pipe( concat('output.min.js') ) // concat pulls all our files together before minifying them
    .pipe( uglify() )
    .pipe(rename('main.js'))
    .pipe(gulp.dest(''))
});

gulp.task('browser-sync', function() {
    browserSync.init(['*'], {
        proxy: "knoxweb.dev",
        root: [__dirname],
        open: {
          file: 'index.php'
        }
    });
});


gulp.task('watch', ['browser-sync'], function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('js/*', ['js']);
  gulp.watch('*.php', reload);
});

gulp.task('default', ['sass', 'html', 'js']);


