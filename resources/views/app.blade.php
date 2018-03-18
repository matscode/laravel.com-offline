<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($canonical))
        <link rel="canonical" href="{{ url($canonical) }}" />
    @endif
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('assets/css/laravel.css') }}">
    <link rel="stylesheet" href="{{asset('css/flexboxgrid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7737514/7707592/css/fonts.css" />
    <link rel="apple-touch-icon" href="/favicon.png">
    <script src="{{asset('assets/js/vue.min.js')}}"></script>
</head>
<body class="@yield('body-class', 'docs') language-php">
<!--     <div class="laracon-banner">
        <img src="/assets/svg/laracon-logo.svg" alt="">
        Join 6,000+ Laravel Developers on February 7, 2018 for Laracon Online.
        <a href="https://laracon.net">Get your tickets today!</a>
    </div> -->
    <span class="overlay"></span>

    <nav class="main">
        <a href="/" class="brand nav-block">
            {!! svg('laravel-logo') !!}
            <span>Laravel</span>
        </a>

        <div class="search nav-block invisible">
            {!! svg('search') !!}
            <input placeholder="search" type="text" v-model="search" id="search-input" v-on:blur="reset" />
        </div>

        <ul class="main-nav" v-if="! search">
            @include('partials.main-nav')
        </ul>

        @if (Request::is('docs*') && isset($currentVersion))
            @include('partials.switcher')
        @endif

        <div class="responsive-sidebar-nav">
            <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
        </div>
    </nav>

    @yield('content')

    <footer class="main">
        <ul>
            @include('partials.main-nav')
        </ul>
        <p>Laravel is a trademark of Taylor Otwell. Copyright &copy; Taylor Otwell.</p>
        <p class="less-significant">
            <a href="http://jackmcdade.com">
                Designed by<br>
                {!! svg('jack-mcdade') !!}
            </a>
        </p>
    </footer>

    <script>
        var algolia_app_id      = '{{ Config::get('algolia.connections.main.id', false) }}';
        var algolia_search_key  = '{{ Config::get('algolia.connections.main.search_key', false) }}';
        var version             = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
    </script>

    @include('partials.algolia_template')

    <script src="{{ elixir('assets/js/laravel.js') }}"></script>
    <script src="/assets/js/viewport-units-buggyfill.js"></script>
    <script>window.viewportUnitsBuggyfill.init();</script>
    <script>
        var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
        (function(d,t){
            var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)
        }(document,'script'));
    </script>
</body>
</html>
