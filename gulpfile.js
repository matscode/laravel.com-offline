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

elixir(function(mix) {
    mix.sass('laravel.scss', 'public/assets/css');
    mix.scripts(['jquery.js', 'plugins/prism.js', 'plugins/bootstrap.js', 'plugins/scotchPanels.js', 'plugins/algoliasearch.js', 'plugins/typeahead.js', 'plugins/hogan.js', 'laravel.js'],
      'public/assets/js/laravel.js',
    	'resources/assets/js/');
    mix.version(['assets/css/laravel.css', 'assets/js/laravel.js']);
});
