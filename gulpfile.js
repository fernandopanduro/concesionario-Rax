// Gulp
const {src , dest, watch, parallel} = require("gulp");

// CSS
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss =  require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');


// Imagenes
const cache = require('gulp-cache')
const imageMin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// JS
const terser = require('gulp-terser-js');


function css(cb) {  

    src("src/scss/**/*.scss")    // Busca el archivo
        .pipe(sourcemaps.init())
        .pipe(plumber()) // Funcion para no detener el workflow
        .pipe(sass())   //Compila
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest("build/css"))    //Almacena 

    cb()    //Avisa el fin de la funcion
}

function imagenes(cb) {

    opciones = {
        optimizationLevel: 3
    }

    src('src/img/**/*.{jpg,png}')
        .pipe( cache(imageMin(opciones)))
        .pipe( dest('build/img') )

    cb();
}

function versionWebp(cb) {
    
    const opciones = {
        quality: 50
    }

    src('src/img/**/*.{jpg,png}')
        .pipe( webp(opciones) )
        .pipe( dest('build/img') )

    cb() // Avisa el fin de la funcion
}

function versionAvif(cb) {
    
    const opciones = {
        quality: 50
    }

    src('src/img/**/*.{jpg,png}')
        .pipe( avif(opciones) )
        .pipe( dest('build/img') )

    cb() // Avisa el fin de la funcion
}

function javascript(cb) {
    src("src/js/**/*.js")
        .pipe(terser())
        .pipe(dest('build/js'))

    cb()
} 

function dev(cb) {
    watch("src/scss/**/*.scss", css)

    cb()
} 

exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel(imagenes, versionWebp, versionAvif, dev);