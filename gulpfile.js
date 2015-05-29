var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.styles(['bootstrap.css', 'select2.css', 'jquery.treegrid.css']);
    mix.scripts(['jquery.js', 'bootstrap.js', 'select2.js', 'rowlink.js', 'jquery.treegrid.js', 'jquery.treegrid.bootstrap3.js']);
});
