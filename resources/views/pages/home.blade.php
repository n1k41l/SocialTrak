@extends('layouts.application')

@section('content')
	
	<div class="jumbotron">
		<div class="container">
			<h1>Welcome to SocialTrak</h1>
			<p>This is the home page for the application</p>
			@if (Auth::guest())
			<p>
				<a class="btn btn-primary btn-lg" href="{{ url('/auth/register') }}">Sign Up Now</a>
			</p>
			@endif
		</div>
	</div>

@stop