@extends('app')

@section('body-class', 'community')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">
    <div class="brand">
        <a href="/">
            <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
        </a>
    </div>

    <ul class="slide-main-nav">
        @include('partials.main-nav')
    </ul>
</nav>

<section class="partner-profile">
    <div class="container">
        <a href="/partners"><h4>Laravel Partners</h4></a>

        <div class="partner-profile-header clearfix">
            <div class="partner-logo"><img src="/assets/img/partner-img-byte5-logo.png"></div>
            <div class="partner-ctas">
                <a href="mailto:cwendler@byte5.de"><div class="btn btn-primary">Hire byte5</div></a>
                <a href="http://www.byte5.net/"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-byte5.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel Development</li>
                            <li>Project Management</li>
                            <li>APIs</li>
                            <li>Angular</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Technical Leadership </li>
                            <li>Rescue Projects</li>
                            <li>Training & Mentoring</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://twitter.com/byte5net"><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><a href="https://de.linkedin.com/company/byte5-digital-media-gmbh"><img src="/assets/svg/icon-linkedin.svg"></a></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About byte5</h2>
                <p>byte5 is a web technology company based in Frankfurt, Germany. For over 10 years we have been specializing on innovative open source technologies that give our expert team all the opportunities to create great web applications, sites and shops for our international clients.</p>
                <p>As an experienced consultant we have perfected a lean and agile approach to make sure that each client project gets exactly what it needs in order to be a long-term success. The projects we work on cooperatively with our clients' internal developers are based on a strong project management team that also takes the position of mentor and trainer when needed.</p>
                <p>What we've learned from our experience with other technologies is the importance of a strong network. Thus we began hosting regular local Laravel events for developers in the economically strong Rhein-Main region in 2016.</p>
            </div>
        </div>
    </div>
</section>
@endsection
