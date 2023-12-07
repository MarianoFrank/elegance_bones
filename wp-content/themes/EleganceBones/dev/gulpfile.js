import gulp from "gulp";
const { src, dest, watch, parallel } = gulp;

// CSS
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cssnano from "cssnano";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import header from "gulp-header";

//WebPack
import webpack from "webpack-stream";
import webpackConfig from "./webpack.config.js";

const paths = {
  css: "src/css/**/*.css",
  js: "src/js/**/*.js",
};

const banner = `/* 
  Theme name: Elegance Bones Woocommerce
  Theme URI:
  Description: Tema para tienda virtual Elegance Bones
  Author: Frank Mariano
  Template: 
  Version: 1.0
  License: GNU General Public License v2 or leter
  Tags: Woocommerce, Elegance, Store, T-shirt
*/\n`;

function compileCss() {
  return src(paths.css)
    .pipe(sourcemaps.init())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(concat("style.css"))
    .pipe(header(banner))
    .pipe(sourcemaps.write("."))
    .pipe(dest("../"));
}

function compileJS() {
  return webpack(webpackConfig).pipe(dest("../js"));
}

function watchs(done) {
  watch(paths.css, compileCss);
  watch(paths.js, compileJS);
  done();
}

const dev = parallel(
  compileCss,
  compileJS,
  watchs
);


export { dev };
