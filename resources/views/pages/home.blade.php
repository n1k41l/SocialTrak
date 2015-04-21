@extends('layouts.application')

@section('content')
	@if(Auth::guest())
		<div class="jumbotron">
			<div class="container">
				<h1>Welcome to SocialTrak</h1>
				<p>This is the home page for the application</p>
				<p>
					<a class="btn btn-primary btn-lg" href="{{ url('/auth/register') }}">Sign Up Now</a>
				</p>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-md-4">
				<aside>
					<section class="user_info">
						@include('layouts.shared.user_info')
					</section>
					<section class="stats">
						@include('layouts.shared.stats')
					</section>
					<section class="micropost_form">
						@include('layouts.shared.micropost_form')
					</section>
				</aside>
			</div>
			<div class="col-md-8">
				<h3>Micropost feed</h3>
				@include('layouts.shared.feed', ['feed_items' => $feed_items])
			</div>
		</div>

	@endif

@stop