const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/jquery-3.6.1.min.js', 'public/js');
mix.js('resources/js/app.js', 'public/js')
.vue()
.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/masks.js', 'public/js');