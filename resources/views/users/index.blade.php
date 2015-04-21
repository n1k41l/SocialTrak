@extends('layouts.application')
@section('content')

	<ul class="users">
		@foreach($users as $user)
			@include('users._user')
		@endforeach
		{!! $users->render() !!}

	</ul>

@stop