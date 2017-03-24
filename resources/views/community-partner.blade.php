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
            <div class="partner-logo"><img src="/assets/svg/partner-logo-1-full.svg"></div>
            <div class="partner-ctas">
                <div class="btn btn-primary">Hire Fireball Group</div>
                <div class="btn btn-default">Visit Website</div>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-placeholder.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel Framework</li>
                            <li>Responsive Design</li>
                            <li>Craft CMS + Statamic</li>
                            <li>Bootstrap + Foundation</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Technical Architecture</li>
                            <li>UX Consulting</li>
                            <li>Rest API Development</li>
                            <li>Content Strategy</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><img src="/assets/svg/icon-github.svg"></li>
                        <li><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><img src="/assets/svg/icon-linkedin.svg"></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About Fireball Group</h2>
                <h3>We do Laravel so you don't have to.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            </div>
        </div>
    </div>
</section>
@endsection
