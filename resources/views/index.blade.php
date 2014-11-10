@extends('layouts.master')

@section('body_opening')
<body id="index" class="page home">
@endsection

@section('content')
<header id="header" role="header">
    <div class="boxed">
        <div id="tagline" class="animated bounceInUp">
            <h1>The PHP Framework<br class="br-mobile__tagline"> For Web Artisans.</h1>
            <h2>PHP That Doesn't Hurt.<br class="br-mobile__tagline"> Code Happy &amp; Enjoy The Fresh Air.</h2>
        </div>

        <div id="callto" class="animated bounceInLeft">
            <a href="docs/quick" class="button large animated shake">Quickstart</a>
            <a href="http://laracasts.com" class="button large animated shake">Laracasts</a>
            <a href="https://forge.laravel.com" class="button large animated shake">Laravel Forge</a>
        </div>

        <div class="animated fadeIn sublime-header" id="header_image"></div>
    </div>
</header>

<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="//laravel.com"><img src="assets/img/logo-head.png" alt="Laravel"></a>
        </div>
        <ul class="primary-nav-ul">
            <li class="current-item"><a href="#">Welcome</a></li>
            <li><a href="/docs" title="Documentation">Documentation</a></li>
            <li><a href="{{ url('api') }}/{{ DEFAULT_VERSION }}" title="Laravel Framework API">API</a></li>
            <li><a href="http://laracasts.com" title="Documentation">Laracasts</a></li>
            <li><a href="https://forge.laravel.com">Forge</a></li>
            <li><a href="http://blog.laravel.com">Blog</a></li>
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

    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="feature-box__item">
                    <h2><i class="icon-random"></i> <a title="RESTful Routing" href="docs/routing">RESTful Routing</a></h2>
                    <p>Use simple Closures to respond to requests to your application. It couldn't be easier to get started building amazing applications.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-graph"></i> <a title="Command Your Data" href="docs/eloquent">Command Your Data</a></h2>
                    <p>Ships with the amazing Eloquent ORM and a great migration system. Works great on MySQL, Postgres, SQL Server, and SQLite.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-pencil-alt"></i> <a title="Beautiful Templating" href="docs/templates">Beautiful Templating</a></h2>
                    <p>Use native PHP or the light-weight Blade templating engine. Blade provides great template inheritance and is blazing fast. You'll love it.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-time"></i> <a title="Ready For Tomorrow" href="docs/routing">Ready For Tomorrow</a></h2>
                    <p>Build huge enterprise applications, or simple JSON APIs. Write powerful controllers, or slim RESTful routes. Laravel is perfect for jobs of all sizes.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-cog"></i> <a title="Proven Foundation" href="http://www.symfony.com">Proven Foundation</a></h2>
                    <p>Laravel is built on top of several Symfony components, giving your application a great foundation of well-tested and reliable code.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-star"></i> <a title="Composer Powered" href="http://getcomposer.org">Composer Powered</a></h2>
                    <p>Composer is an amazing tool to manage your application's third-party packages. Find packages on Packagist and use them in seconds.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-group"></i> <a title="Great Community" href="http://laravel.io/forum">Great Community</a></h2>
                    <p>Whether you're a PHP beginner or architecture astronaut, you'll fit right in. Discuss ideas in the IRC chat room, or post questions in the forum.</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-wrench"></i> <a title="Red, Green, Refactor" href="docs/testing">Red, Green, Refactor</a></h2>
                    <p>Laravel is built with testing in mind. Stay flexible with the IoC container, and run your tests with PHPUnit. Don't worry... it's easier than you think.</p>
                </li>
            </ul>
        </article>
    </section>

</div>

<section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravel has changed my life. The best framework to quickly turn an idea into product.</p></div>
               <div class="person">Maksim Surguy</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel reignited my passion for code, reinforced my understanding of MVC, and made development fun again!</p></div>
               <div class="person">Jozef Maxted</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel kept me from leaving PHP.</p></div>
               <div class="person">Michael Hasselbring</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel helped me stop reinventing the wheel!</p></div>
               <div class="person">Ryan McDonough</div>
           </li>
       </ul>
   </article>
</section>

<footer id="foot" class="textcenter">
    <div class="boxed">

        <nav id="secondary">
            <div id="logo-foot">
	           <a href="//laravel.com"><img src="assets/img/logo-foot.png" alt="Laravel"></a>
	        </div>
            <ul>
              <li class="current-item"><a href="#">Welcome</a></li>
              <li><a href="/docs" title="Documentation">Documentation</a></li>
              <li><a href="{{ url('api') }}/{{ DEFAULT_VERSION }}" title="Laravel Framework API">API</a></li>
              <li><a href="http://laracasts.com" title="Documentation">Laracasts</a></li>
              <li><a href="https://forge.laravel.com">Forge</a></li>
              <li><a href="http://blog.laravel.com">Blog</a></li>
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
