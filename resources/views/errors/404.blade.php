@extends('app')

@section('body-class')
the-404
@endsection

@section('content')

    <div class="container">
        @include('partials.search')
    </div>

	<div class="contain">
		<div class="media">
			<img src="/assets/img/lamp-post.jpg">
		</div>
		<div class="content">
			<h1>You seem to have upset the delicate internal balance of my housekeeper.</h1>
		</div>
	</div>

@endsection
