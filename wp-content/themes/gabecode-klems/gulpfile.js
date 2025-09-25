const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const rename = require('gulp-rename');

// Compilar SCSS
function compileSass() {
  return gulp.src('assets/dev/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false
    }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('assets/app/css'));
}

// Compilar JavaScript
function compileJS() {
  return gulp.src('assets/dev/js/**/*.js')
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/app/js'));
}

// Optimizar imágenes
function optimizeImages() {
  return gulp.src('assets/dev/images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/app/images'));
}

// Copiar fuentes
function copyFonts() {
  return gulp.src('assets/dev/fonts/**/*')
    .pipe(gulp.dest('assets/app/fonts'));
}

// Watch para desarrollo
function watchFiles() {
  gulp.watch('assets/dev/scss/**/*.scss', compileSass);
  gulp.watch('assets/dev/js/**/*.js', compileJS);
  gulp.watch('assets/dev/images/**/*', optimizeImages);
  gulp.watch('assets/dev/fonts/**/*', copyFonts);
}

// Tareas individuales
exports.sass = compileSass;
exports.js = compileJS;
exports.images = optimizeImages;
exports.fonts = copyFonts;

// Tareas combinadas
exports.watch = gulp.series(compileSass, compileJS, copyFonts, watchFiles);
exports.build = gulp.series(compileSass, compileJS, optimizeImages, copyFonts);
exports.default = gulp.series(compileSass, compileJS, copyFonts, watchFiles);