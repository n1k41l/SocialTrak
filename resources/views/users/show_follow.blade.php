@extends('layouts.application')

@section('content')
	<div class="row">
		<div class="col-md-4">
			<aside>
				<section class="user_info">
					@include('layouts.shared.user_info')
				</section>
				<section class="stats">
					@include('layouts.shared.stats')
				</section>
			</aside>
		</div>
		<div class="col-md-8">
			<h3>{{ $title }}</h3>
			@if(isset($users))
				<ul class="users follow">
					@foreach($users as $user)
						@include('users._user')
					@endforeach
					{!! $users->render() !!}
				</ul>
			@endif
		</div>		
	</div>
@stop