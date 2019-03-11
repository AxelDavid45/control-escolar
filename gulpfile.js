const gulp = require ('gulp');
const scss = require('gulp-sass');
// Default
function css() {
    return gulp.src('./src/scss-custom/main.scss')
            .pipe(scss.sync({outputStyle: 'compressed'}
            ).on('error', scss.logError))
            .pipe(gulp.dest("./assets/css/"));
}

gulp.watch("./src/scss-custom/*/*",css);
//Exportar la tarea
exports.default = css;