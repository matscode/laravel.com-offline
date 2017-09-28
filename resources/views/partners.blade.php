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
            <p>
                Laravel Partners are elite shops providing top-notch Laravel development and consulting.<br>
                Each of our partners can help you craft a beautiful, well-architected project.
            </p>
        </div>
    </div>
</section>


<section class="panel partners dark">
    <div class="container">
        <div class="callouts flex-column mw-620px">
            <a href="/partner/vehikl" class="partner-card">
                <div class="partner-card-banner partner-card-lg partner-logo-banner-vehikl">
                    <img src="/assets/svg/vehikl-logo-white.svg">
                </div>
            </a>

            <div class="flex-row">
                <a href="/partner/tighten"  class="partner-card mr-2">
                    <div class="partner-card-banner partner-card-md partner-logo-banner-tighten">
                        <img src="/assets/svg/tighten-logo-white.svg">
                    </div>
                </a>
                <a href="/partner/kirschbaum-development-group"  class="partner-card">
                    <div class="partner-card-banner partner-card-md partner-logo-banner-kirschbaum">
                        <img src="/assets/svg/kirschbaum-logo-white.svg">
                    </div>
                </a>
            </div>

            <div class="flex-row">
                <a href="/partner/byte5"  class="partner-card mr-2">
                    <div class="partner-card-banner partner-card-md partner-logo-banner-byte5">
                        <img src="/assets/img/partner-img-byte5-logo-while.png" style="max-width: 160px;">
                    </div>
                </a>

                <a href="mailto:&#116;&#097;&#121;&#108;&#111;&#114;&#064;&#108;&#097;&#114;&#097;&#118;&#101;&#108;&#046;&#099;&#111;&#109;" class="partner-card-md partner-card-call mb-2">
                    <div class="partner-banner-become-title">Become A Partner</div>

                    <div class="partner-card-body">
                        <p class="mb-2">If you're a web development shop creating high-quality Laravel projects, we would love to discuss partnering with you.
                            You can get in touch using the link below:</p>
                        <div class="text-red">Contact Us</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
