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
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('resources/js/theme.js', 'public/js/theme.js')
mix.sass('resources/sass/owner.scss', 'public/css');
