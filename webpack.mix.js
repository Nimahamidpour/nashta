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
mix.styles([
    'resources/views/front/css/bootstrap/bootstrap.css',
    'resources/views/front/css/bootstrap/bootstrap-grid.min.css',
    'resources/views/front/css/bootstrap/sb-admin.min.css',
    'resources/views/front/css/google/fontgoogleapi.css',
    'resources/views/front/css/google/fontgoogleapi2.css',
    'resources/views/front/css/custom/style.css',
    'resources/views/front/css/custom/slider.css',
    'resources/views/front/css/zoom/example.css',
    'resources/views/front/css/zoom/pygments.css',
    'resources/views/front/css/zoom/easyzoom.css',
    'resources/views/front/css/chosen/chosen.css',
    'resources/views/front/css/persian-datepicker.css',

],'public/front/css/app.css');

mix.scripts([
    'resources/views/front/js/vendor/jquery/jquery.min.js',
    'resources/views/front/js/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/views/front/js/vendor/jquery-easing/jquery.easing.min.js',
    'resources/views/front/js/vendor/magnific-popup/jquery.magnific-popup.min.js',
    'resources/views/front/js/aos/aos.js',
    'resources/views/front/js/aos/aosnext.js',
    'resources/views/front/js/counter/counter3.js',
    'resources/views/front/js/counter/counter.js',
    'resources/views/front/js/counter/counter2.js',
    'resources/views/front/js/admin/sb-admin.min.js',
    'resources/views/front/js/chosen/chosen.jquery.js',
    'resources/views/front/js/chosen/chosen.proto.js',
    'resources/views/front/js/custom/prefixfree.min.js',
    'resources/views/front/js/less/less.js',
    'resources/views/front/js/custom/nashta.js',
    'resources/views/front/js/persian-datepicker.js',
    'resources/views/front/js/persian-date.js',

],'public/front/js/app.js');
