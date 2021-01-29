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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/admin/app.scss', 'public/admin/css')
    .sass('resources/sass/tc_lvovo/app.scss', 'public/css/')
    .options({
        extractVueStyles: true,
        globalVueStyles: 'resources/js/assets/scss/scss.scss',
    })
    .version()
    .browserSync('http://tc_lvovo/');
