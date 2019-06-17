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

let options = {
    processCssUrls: false,
    autoprefixer: {
        browsers: ['last 3 versions', '> 1%'],
        cascade: true
    }
};
// Mix options

if (mix.inProduction()) {

    mix.version();
    // Generate with versioning / cache busting

    // options.purifyCss = true;
    // Only compile required CSS
}

mix.options(options);
// Webpack plugin config

mix.extract(['axios', 'jquery']);
// JS Vendor

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
// SASS and JS
