const gulp         = require('gulp');
const concat       = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS     = require('gulp-clean-css');
const del          = require('del');
const sass         = require('gulp-sass');
const sourcemaps   = require('gulp-sourcemaps');
const gcmq = require('gulp-group-css-media-queries');

const patch = {

    sassFiles: {
        dev:'./dev/sass/*.*'
    }

};

function stylesSass() {
    return gulp.src(patch.sassFiles.dev)
        .pipe(sourcemaps.init({loadMaps: true}))
        // .pipe(sass().on('error', sass.logError))
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gcmq())
        // .pipe(cleanCSS({
        //     level: 2
        // }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'));
}

function clear() {
    return del(['./styles.css']);
}

gulp.task('build', gulp.series(clear, gulp.parallel(stylesSass)));
