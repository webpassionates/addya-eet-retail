const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

// Compile Sass to CSS
function compileSass() {
  return gulp.src('src/assets/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('dist/css'));
}

// Minify CSS
function minifyCss() {
    return gulp.src('dist/css/style.css', { allowEmpty: true })
      .pipe(cleanCSS())
      .on('error', function (err) {
        console.error('Error:', err.message);
      })
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('dist/css'));
}

// Combine and minify JavaScript files
function bundleJs() {
    return gulp.src('src/assets/js/**/*.js')
      .pipe(concat('bundle.js')) // Concatenate all JS files into one bundle
      .pipe(uglify()) // Minify the bundle
      .pipe(rename({ suffix: '.min' })) // Rename the minified file
      .pipe(gulp.dest('dist/js')); // Output the bundle to the dist/js directory
}

// Minify JavaScript
function minifyJs() {
  return gulp.src('src/assets/js/**/*.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/js'));
}

function copyImages() {
    return gulp.src('src/assets/images/**/*')
      .pipe(gulp.dest('dist/images'));
  }

// Watch for changes
function watch() {
    // Minify CSS after compiling Sass
    //gulp.watch('src/assets/scss/**/*.scss', gulp.series(compileSass, minifyCss)); 
    //gulp.watch('src/assets/js/**/*.js', minifyJs);

    gulp.watch('src/assets/scss/**/*.scss', compileSass);
    gulp.watch('dist/css/**/*.css', minifyCss);
    gulp.watch('src/assets/js/**/*.js', minifyJs);
    gulp.watch('src/assets/images/**/*', copyImages); // Watch images folder
    gulp.watch('src/assets/js/**/*.js', bundleJs);
}

function watchJs() {
    gulp.watch('src/js/**/*.js', bundleJs);
  }

// Export tasks
exports.default = gulp.series(
  gulp.parallel(compileSass, minifyCss, minifyJs),
  bundleJs,
  watch,
  //watchJs
);
