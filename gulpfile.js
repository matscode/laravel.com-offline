var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.sass('laravel.scss', 'public/assets/css');

    mix.webpack(['laravel.js'],
        'public/assets/js/laravel.js',
        'resources/assets/js/'
    );

    mix.version(['assets/css/laravel.css', 'assets/js/laravel.js']);
});
