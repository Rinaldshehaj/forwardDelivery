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
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/calculator.js', 'public/js/app.js');

// For styles use mix.styles

// mix.autoload({
//     jquery: ['$', 'window.jQuery', 'jQuery'],
//     'popper.js/dist/umd/popper.js': ['Popper']
// }).js(['resources/js/app.js', 'public/vendor/adminlte/dist/js/adminlte.js'], 'public/js/app.js')
//     .sass('resources/sass/app.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
