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
        <div class="callouts flex-column mw-620px">
            <a href="/community/vehikl" class="partner-card">
                <div class="partner-card-banner partner-logo-banner-vehikl">
                    <img src="/assets/svg/partner-logo-vehikl.svg">
                </div>

                <div class="partner-card-body">
                    <div class="partner-card-sponsor">Diamond</div>
                    <div class="partner-card-title">Vehikl</div>
                    <p>Vehikl is a team of code-crushing Laravel experts.</p>
                </div>
            </a>

            <a href="/community/tighten"  class="partner-card">
                <div class="partner-card-banner partner-logo-banner-tighten">
                    <img src="/assets/svg/partner-logo-tighten.svg">
                </div>

                <div class="partner-card-body">
                    <div class="partner-card-sponsor">Platinum</div>
                    <div class="partner-card-title">Tighten</div>
                    <p>We turn great ideas into software that works.</p>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
