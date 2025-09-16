const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');

// Paths
const paths = {
  scss: {
    src: 'src/scss/**/*.scss',
    dest: 'dist/css/'
  },
  js: {
    src: 'src/js/**/*.js',
    dest: 'dist/js/'
  },
  images: {
    src: 'src/images/**/*',
    dest: 'dist/images/'
  },
  animations: {
    src: 'src/animations/**/*',
    dest: 'dist/animations/'
  },
  html: {
    src: 'src/html/**/*.html',
    dest: 'dist/'
  }
};

// Compile Sass
function compileSass() {
  return gulp.src(paths.scss.src)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false
    }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.scss.dest));
}

// Compile JavaScript
function compileJS() {
  return gulp.src(paths.js.src)
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.js.dest));
}

// Copy Images (simplified without optimization for now)
function copyImages() {
  return gulp.src(paths.images.src)
    .pipe(gulp.dest(paths.images.dest));
}

// Copy Animations (Lottie JSON)
function copyAnimations() {
  return gulp.src(paths.animations.src)
    .pipe(gulp.dest(paths.animations.dest));
}

// Copy HTML files
function copyHTML() {
  return gulp.src(paths.html.src)
    .pipe(gulp.dest(paths.html.dest));
}

// Watch files
function watchFiles() {
  gulp.watch(paths.scss.src, compileSass);
  gulp.watch(paths.js.src, compileJS);
  gulp.watch(paths.images.src, copyImages);
  gulp.watch(paths.animations.src, copyAnimations);
  gulp.watch(paths.html.src, copyHTML);
}

// Build task
const build = gulp.series(compileSass, compileJS, copyImages, copyAnimations, copyHTML);

// Watch task
const watch = gulp.series(build, watchFiles);

// Export tasks
exports.sass = compileSass;
exports.js = compileJS;
exports.images = copyImages;
exports.animations = copyAnimations;
exports.html = copyHTML;
exports.build = build;
exports.watch = watch;
exports.default = watch;
