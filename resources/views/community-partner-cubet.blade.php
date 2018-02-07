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
            <div class="partner-logo">
                <?php echo file_get_contents(public_path('assets/img/partner-img-cubet-logo.svg')); ?>
            </div>
            <div class="partner-ctas">
                <a href="mailto:sales@cubettech.com"><div class="btn btn-primary">Hire Cubet</div></a>
                <a href="https://cubettech.com/"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-cubet.jpeg"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel Development</li>
                            <li>Vue / Angular / React</li>
                            <li>UI / UX Product Design</li>
                            <li>API Design</li>
                            <li>Software Architecture</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Consulting</li>
                            <li>Staff Augmentation</li>
                            <li>SaaS Products</li>
                            <li>Startup Guidance</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://github.com/cubettech"><img src="/assets/svg/icon-github.svg"></a></li>
                        <li><a href="https://twitter.com/CubetTech"><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><a href="https://www.linkedin.com/company/cubet-technologies/"><img src="/assets/svg/icon-linkedin.svg"></a></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About Cubet</h2>
                <p>Cubet Techno Labs is a 150+ member Digital Engineering company with offices in India and London, helping to deliver your digital dreams to perfection. Formed in 2007, Cubet has been focused on SMAC (Social/Mobile/Analytics/Cloud) development and consulting to help enterprises and online businesses go from idea to execution. </p>
                <p>Our extensive Laravel development services are perfect for highly agile business methodologies. Our certified Laravel developers create brilliant extensions and accurately map web applications to ensure faster, optimal performance of your solutions. With a clear focus on creating optimized database integrations that reduce lag and increase performance, our Laravel development services provide speed, agility and performance.</p>
                <p>We always place great emphasis on FOSS (Free, Open-Source Software) front end and back end technologies including JavaScript Frameworks like Vue/Node/Angular/React/Meteor and Mobile app technologies- iOS/Android/React Native as well as cloud deployment on AWS. There is a dedicated team of UI/UX/HTML developers, Project Management and QA experts to support all projects and ensure bug free releases, all working alongside our London based account management teams.</p>
                <p>We have over 30+ portfolio of enterprise mobile/web application projects built on the Laravel framework and we would be happy to talk with you about the enormous possibilities of using it for your next idea - however big or small. Some of our clients include enterprises like The British Medical Journal as well innovative Tech Start-ups like Active Inspiration from the UK, US, EU & Australia.</p>
            </div>
        </div>
    </div>
</section>
@endsection
