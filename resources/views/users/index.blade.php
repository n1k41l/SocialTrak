@extends('layouts.application')
@section('content')

	<ul class="users">

		@foreach($users as $user)
			<li>
				<img src="{{ $user->gravatar }}" class="gravatar img-circle" alt="Circular Image">
				<a href="{{ action('UsersController@show', $user->id) }}">{{ $user->name }}</a>

			</li>
		@endforeach

	</ul>

@stop