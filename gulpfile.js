const gulp = require('gulp');
const fileInclude = require('gulp-file-include');

// Define task to include header and footer
gulp.task('html', () => {
  gulp.src(['*.html'])  // Include all HTML files in the directory
    .pipe(fileInclude({
      prefix: '@@',      // Define the include syntax
      basepath: '@file'  // Define the base path for file inclusion
    }))
    .pipe(gulp.dest('dist/')); // Output to 'dist' folder
});

gulp.task('watch', () => {
  gulp.watch('*.html', gulp.series('html'));
});

gulp.task('default', gulp.series('html', 'watch'));
