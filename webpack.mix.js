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

mix.js('resources/js/layouts.js', 'public/js')
    .sass('resources/sass/admin/layouts.scss', 'public/admin/css')
    .sass('resources/sass/tc_lvovo/layouts.scss', 'public/css/tc_lvovo')
    .browserSync('http://tc_lvovo/');
