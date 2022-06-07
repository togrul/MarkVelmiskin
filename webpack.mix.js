const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js("resources/js/app.js", "public/js")
  .js("resources/js/owl.carousel.min.js","public/js/owl-carousel.min.js")
 .postCss("resources/css/app.css", "public/css", [
   require("tailwindcss"),
 ])
 .styles(["resources/css/vendor/owl.carousel.min.css","resources/css/vendor/owl.theme.default.min.css"],"public/css/owl-carousel.min.css")
 ;
