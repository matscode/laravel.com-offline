<!doctype html>

<html lang="en">

<head>
    <title>Laravel - The PHP framework for web artisans.</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.png?v=2">

    <link href="/assets/css/styles.css" rel="stylesheet">

    <!-- fonts -->
    <script src="http://use.edgefonts.net/source-sans-pro:n3,i3,n4,i4,n6,i6,n7,i7.js"></script>
    <script src="http://use.edgefonts.net/source-code-pro.js"></script>

    <!--[if IE]><link href="assets/css/ie.css" rel="stylesheet" type="text/css"><![endif]-->

    <!-- HTML5 elements in less than IE9, yes please! -->
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- If less than IE8 add some JS for the webfont icons -->
    <!--[if lt IE 8]><script src="assets/js/ie_font.js"></script><![endif]-->

    @if (App::environment() == 'production')
    <script>
        var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
        (function(d,t){
            var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)
        }(document,'script'));
    </script>
    @endif

</head>

@section('body_opening')
<body id="index" class="page">
@show

    <!--[if lt IE 7]>
        <p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]-->

    <div id="wrapper">

    @yield('content')

    </div>

    <section id="copyright" class="textcenter">
        <div class="boxed">
            <div class="animated slideInLeft">
                Laravel is a trademark of Taylor Otwell.<br class="br-mobile--footer">
                Copyright &copy; <a href="http://twitter.com/taylorotwell" title="Taylor Otwell" target="_blank">Taylor Otwell</a>.<br class="br-mobile--footer">
                Website built with &hearts; <a href="//ikreativ.com" title="iKreativ" target="_blank">iKreativ</a>;<br class="br-mobile--footer">
                responsive by <a href="//tighten.co" title="Tighten Co." target="_blank">Tighten Co.</a>
            </div>
        </div>
    </section>

    <script src="/assets/js/bundle.js"></script>

</body>
</html>
