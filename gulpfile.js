const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {

    mix.sass('custom.scss', 'public/css/app.css')

    // mix.webpack([
    //        'app.js', 
    //    ], 'public/js/app.js');

    mix.version([
       'public/css/app.css',
    ]);

});

