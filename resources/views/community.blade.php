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

<section class="hero">
    <div class="container">

        <div class="content">
            <h1>Making the web a better place with Laravel</h1>

            <p>Meet our fantastic community of teams and individuals who are making Laravel the best it can be.  </p>
        </div>
    </div>
</section>


<section class="panel partners dark">
    <div class="container">
        <div class="callouts">
            <a href="/community-partner" class="partner-card third">
                <div class="partner-card-banner partner-logo-banner-vehikl">
                    <img src="/assets/svg/partner-logo-1.svg">
                </div>

                <div class="partner-card-body">
                    <div class="partner-card-title">Fireball Group</div>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                </div>
            </a>

            <a href="/community-partner"  class="partner-card third">
                <div class="partner-card-banner partner-logo-banner-tighten">
                    <img src="/assets/svg/partner-logo-2.svg">
                </div>

                <div class="partner-card-body">
                    <div class="partner-card-title">Anchors Away</div>
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                </div>
            </a>

            <a href="/community-partner"  class="partner-card white third">
                <div class="partner-card-banner partner-logo-banner-laracasts">
                    <img src="/assets/svg/partner-logo-3.svg">
                </div>

                <div class="partner-card-body">
                    <div class="partner-card-title">The Establishment</div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
