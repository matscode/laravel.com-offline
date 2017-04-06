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
        <a href="/community"><h4>Laravel Community</h4></a>

        <div class="partner-profile-header clearfix">
            <div class="partner-logo"><img src="/assets/svg/partner-logo-tighten-full.svg"></div>
            <div class="partner-ctas">
                <a href="mailto:&#104;&#101;&#108;&#108;&#111;&#064;&#116;&#105;&#103;&#104;&#116;&#101;&#110;&#046;&#099;&#111;"><div class="btn btn-primary">Hire Tighten Co.</div></a>
                <a href="https://tighten.co"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-tighten.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel Applications</li>
                            <li>Laravel Codebase Audits</li>
                            <li>Training + Mentoring</li>
                            <li>APIs + Aggregators</li>
                            <li>VueJS + ReactJS</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>CraftCMS + Statamic</li>
                            <li>UX Design</li>
                            <li>Content Strategy</li>
                            <li>Staff Augmentation</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://github.com/tightenco"><img src="/assets/svg/icon-github.svg"></a></li>
                        <li><a href="https://twitter.com/tightenco"><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><a href="https://www.linkedin.com/company-beta/4795582/?pathWildcard=4795582"><img src="/assets/svg/icon-linkedin.svg"></a></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About Tighten Co.</h2>
                <h3>We turn great ideas into software that works.</h3>
                <p>You've got an amazing product idea and you've got some funding. Now all you need is a development team. But building one from scratch is daunting and expensive. The better move: Let Tighten be your dev team. </p>
                <p>Our team of top-notch Laravel developers will build your product, help you take it to market, and iterate with you as things change.  We work with big enterprises, small-to-medium sized businesses, and early-stage startups to devise, design, a deliver world-class applications that are loved by users and developers alike.</p>
                <p>Constant learning and open sharing with the Laravel community are essential to how we work, and a big part of what we love about it.  We are tireless advocates for the Laravel ecosystem, and we’re delighted to be sponsors.</p>
            </div>
        </div>
    </div>
</section>
@endsection
