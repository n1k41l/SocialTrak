
	<li>
		<img src="{{ $user->gravatar }}" class="gravatar img-circle" alt="Circular Image">
		<a href="{{ action('UsersController@show', $user->id) }}">{{ $user->name }}</a>
		@if(Auth::user()->isAdmin() && Auth::user()->id != $user->id)
			{!! delete_form(['users.destroy', $user->id]) !!}
		@endif
	</li>
