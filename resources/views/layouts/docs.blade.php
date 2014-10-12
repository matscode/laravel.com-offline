@extends('layouts.master')

@section('content')
<header id="header" role="header">
    <div class="boxed">
        <div id="tagline">
            <h1>Documentation.</h1>
        </div>

        <div id="version">
            <ul class="nolist">
                @foreach ($versions as $version => $title)
                    <li class="{{ $currentVersion == $version ? 'current' : '' }}">
                        <a href="{{ url('docs/'.$version) }}" title="{{ $title }}">{{ $title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
            <a href="//laravel.com"><img src="/assets/img/logo-head.png" alt="Laravel"></a>
        </div>
        <ul class="primary-nav-ul">
            <li><a href="#">Welcome</a></li>
            <li class="current-item"><a href="/docs" title="Documentation">Documentation</a></li>
            <li><a href="http://laracasts.com" title="Documentation">Laracasts</a></li>
            <li><a href="https://forge.laravel.com">Forge</a></li>
            <li><a href="{{ url('api') }}/{{ DEFAULT_VERSION }}" title="Laravel Framework API">API</a></li>
            <li class="community">
              <a href="#" title="Laravel Community Resources">Community</a>
              <ul>
                <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
                <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                <li><a href="https://laracasts.com/discuss">Laracasts Forums</a></li>
                <li><a href="http://laravel.io/forum">Laravel.io Forums</a></li>
                <li><a href="http://larajobs.com?partner=5">LaraJobs</a></li>
              </ul>
            </li>
        </ul>
        <a href="#" class="show-primary-nav">Menu</a>
    </div>
</nav>

<div id="content">

    <section id="documentation">
        <article class="boxed">

            <ul class="version-picker--mobile nolist">
                @foreach ($versions as $version => $title)
                <li class="{{ $currentVersion == $version ? 'current' : '' }}">
                    <a href="{{ url('docs/'.$version) }}" title="{{ $title }}">{{ $title }}</a>
                </li>
                @endforeach
            </ul>
            <a href="#" class="docs-show" data-show-text="Navigate" data-hide-text="Close">Navigate</a>

            <nav id="docs">
                {!! $index !!}
            </nav>

            <div id="docs-content">
                {!! $content !!}
            </div>

        </article>
    </section>

</div>

<footer id="foot" class="textcenter">
    <div class="boxed">

        <nav id="secondary">
            <div id="logo-foot">
                <a href="//laravel.com"><img src="/assets/img/logo-foot.png" alt="Laravel"></a>
            </div>
            <ul>
                <li><a href="#">Welcome</a></li>
                <li class="current-item"><a href="/docs" title="Documentation">Documentation</a></li>
                <li><a href="http://laracasts.com" title="Documentation">Laracasts</a></li>
                <li><a href="https://forge.laravel.com">Forge</a></li>
                <li><a href="{{ url('api') }}/{{ DEFAULT_VERSION }}" title="Laravel Framework API">API</a></li>
            </ul>
        </nav>

    </div>
</footer>

<div id="top">
    <a href="#index" title="Back to the top">
        <i class="icon-chevron-up"></i>
    </a>
</div>

@endsection
