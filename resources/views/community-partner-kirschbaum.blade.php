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
            <div class="partner-logo"><img src="/assets/svg/partner-logo-kirschbaum-full.svg"></div>
            <div class="partner-ctas">
                <a href="mailto:nathan.kirschbaum@gmail.com">
                    <div class="btn btn-primary">
                        Hire
                        <span class="partner-ctas-visible-desktop">Kirschbaum Development</span>
                        <span class="partner-ctas-visible-mobile">KDG</span>
                    </div>
                </a>
                <a href="https://kirschbaumdevelopment.com"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-kirschbaum.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel Development</li>
                            <li>Vue.js / Angular / Ionic</li>
                            <li>Machine Learning</li>
                            <li>APIs / Microservices</li>
                            <li>SaaS Products</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Technical Leadership</li>
                            <li>Rescue Projects</li>
                            <li>Staff Augmentation</li>
                            <li>Team Building / Mentoring</li>
                            <li>Direction for Start-ups</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://github.com/kirschbaum"><img src="/assets/svg/icon-github.svg"></a></li>
                        <li><a href="https://twitter.com/n_kirschbaum"><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><a href="https://www.linkedin.com/company-beta/11089184/"><img src="/assets/svg/icon-linkedin.svg"></a></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About Kirschbaum Development</h2>
                <p>We are a team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems. We bring products and services to market quickly by leveraging iterative processes and lean development techniques.</p>
                <p>You can count on us to bring passion, dedication, and stability to our work. We value efficient processes and tools, and we value people and relationships even more. We view ourselves as master craftspeople who respect the importance and significance of what we do. Think "This Old House" on your server.</p>
                <p>We are proud to have helped some of the largest companies in the world develop products, streamline systems, and better reach their customers using Laravel. We're honored to have this opportunity to be part of the Laravel Partners program.</p>
                <p>We look forward to working with you!</p>
            </div>
        </div>
    </div>
</section>
@endsection
