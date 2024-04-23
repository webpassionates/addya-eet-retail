const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const fs = require('fs-extra');

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

//function copyImages() {
//  return gulp.src('src/assets/images/**/*', { base: 'src/assets', buffer: false })
//    .pipe(gulp.dest('dist/images'));
//}
function copyImages() {
    return new Promise((resolve, reject) => {
      fs.copy('src/assets/images', 'dist/images', (err) => {
        if (err) {
          console.error('Error copying images:', err);
          reject(err);
        } else {
          console.log('Images copied successfully!');
          resolve();
        }
      });
    });
  }
  
function copyFonts() {
  return gulp.src('src/assets/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'));
}

// Watch for changes
function watch() {
  gulp.watch('src/assets/scss/**/*.scss', gulp.series(compileSass, minifyCss));
  gulp.watch('src/assets/js/**/*.js', gulp.series(bundleJs));
  gulp.watch('src/assets/images/**/*', copyImages);
  gulp.watch('src/assets/fonts/**/*', copyFonts);
}

// Export tasks
exports.default = gulp.series(
  gulp.parallel(compileSass, minifyCss, bundleJs, copyFonts, copyImages),
  watch,
);
