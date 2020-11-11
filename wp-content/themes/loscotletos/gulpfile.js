'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify-es').default,
    rename = require('gulp-rename'),
    svgmin = require('gulp-svgmin'),
    cheerio = require('gulp-cheerio'),
    svgsprite = require('gulp-svg-sprite'),
    concat = require('gulp-concat'),
    del = require('del'),
    gcmq = require('gulp-group-css-media-queries'),
    sassGlob = require('gulp-sass-glob');

var path = {
    src: {
        js: './_source/js/**/*.js',
        style: './_source/css/**/*\.scss',
        css: './_source/css/**/*\.css',
        img: './_source/img/**/*.*',
        svg: './_source/svg/**/*\.svg',
        font: './_source/font/**/*\.*',
        module: './_source/module/**/*.*',
        favicon: './_source/favicon/*.*'
    },
    build: {
        js: './js/',
        style: './css/',
        css: './css/',
        img: './img/',
        svg: './svg/',
        font: './font/',
        module: './js/lib/',
        favicon: './favicon/'
    }
};

// Clean assets
function clean() {
    return del(["_assets"]);
}

function jsWorkBuild() {
    return gulp.src(path.src.js)
        .pipe(concat('bundle.min.js'))
        .pipe(gulp.dest(path.build.js));
}

function jsBuild() {
    return gulp.src(path.src.js)
        .pipe(uglify())
        .pipe(concat('bundle.min.js'))
        .pipe(gulp.dest(path.build.js));
}

function styleBuild() {
    return gulp.src(path.src.style)
        .pipe(sassGlob())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(prefixer({ overrideBrowserslist: ['last 3 version', '> 1%', 'ie 8', 'ie 9', 'Opera 12.1'], cascade: false }))
        .pipe(gcmq())
        .pipe(cssnano({zindex: false}))
        .pipe(gulp.dest(path.build.style));
}

// function cssBuild() {
//     return gulp.src(path.src.css)
//         .pipe(prefixer({ overrideBrowserslist: ['last 3 version', '> 1%', 'ie 8', 'ie 9', 'Opera 12.1'], cascade: false }))
//         .pipe(cssnano({zindex: false}))
//         .pipe(gulp.dest(path.build.css));
// }


function imgBuild() {
    return gulp.src(path.src.img)
        .pipe(rename(function (path) {
            path.extname = (path.extname + "").toLowerCase();
        }))
        .pipe(gulp.dest(path.build.img));
}

function imgWorkBuild() {
    return gulp.src(path.src.img)
        .pipe(rename(function (path) {
            path.extname = (path.extname + "").toLowerCase();
        }))
        .pipe(gulp.dest(path.build.img));
}

function svgBuild() {
    return gulp.src(path.src.svg)
        .pipe(svgmin({
            js2svg: {
                pretty: true
            }
        }))
        .pipe(cheerio({
            run: function ($) {
                $('[fill]').removeAttr('fill');
                $('[stroke]').removeAttr('stroke');
                $('[style]').removeAttr('style');
            },
            parserOptions: { xmlMode: true }
        }))
        .pipe(svgsprite({
            mode: {
                symbol: {
                    sprite: "../sprite.svg"
                }
            }
        }))
        .pipe(gulp.dest(path.build.svg));
}

function fontBuild() {
    return gulp.src(path.src.font)
        .pipe(gulp.dest(path.build.font));
}

function moduleBuild () {
    return gulp.src(path.src.module)
        .pipe(gulp.dest(path.build.module));
}

function faviconBuild() {
    return gulp.src(path.src.favicon)
        .pipe(gulp.dest(path.build.favicon));
}


gulp.task('build',
    gulp.series(clean, gulp.parallel(
        jsBuild,
        styleBuild,
        // cssBuild,
        imgBuild,
        svgBuild,
        fontBuild,
        moduleBuild,
        faviconBuild
    )));

gulp.task('watchFiles', function () {

    gulp.watch([path.src.js], jsWorkBuild);

    gulp.watch([path.src.style], styleBuild);

    // gulp.watch([path.src.css], cssBuild);

    gulp.watch([path.src.img], imgWorkBuild);

    gulp.watch([path.src.svg], svgBuild);

    gulp.watch([path.src.font], fontBuild);

    gulp.watch([path.src.module], moduleBuild);

});

gulp.task('default', gulp.parallel(gulp.series('build', 'watchFiles')));


