@extends('app')

@section('body-class')
the-404
@endsection

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

    <div class="contain">
        <div class="media">
            <img src="/assets/img/lamp-post.jpg">
        </div>
        <div class="content">
            <h1>You seem to have upset the delicate internal balance of my housekeeper.</h1>
        </div>
    </div>

@endsection
