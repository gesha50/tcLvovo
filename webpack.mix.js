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
    .sass('resources/js/assets/scss/scss.scss', 'public/css/')
    .options({
        extractVueStyles: true,
        globalVueStyles: 'resources/js/assets/scss/scss.scss',
    })
    .version()
mix.sourceMaps()
    .js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();
mix.browserSync({
    watch: true,
    files: [
        'public/js/**/*',
        'public/css/**/*',
        'public/**/*.+(html|php)',
        'resources/views/**/*.php'
    ],
    open: "http://tc_lvovo/",
    browser: "google chrome",
    reloadDelay: 1000,
    proxy: {
        target: "http://tc_lvovo/",
        ws: true,
    },
});
