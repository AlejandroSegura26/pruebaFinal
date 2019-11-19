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

    mix.styles(['resources/src/sb-admin-2.min.css'],'public/css/plantilla.css')
    .scripts(['resources/src/jquery.min.js','resources/src/bootstrap.bundle.min.js','resources/src/jquery.easing.min.js','resources/src/sb-admin-2.min.js','resources/src/Chart.min.js'],'public/js/plantilla.js')
    .js('resources/js/app.js', 'public/js/app.js');
