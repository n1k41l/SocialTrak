 <img src="{{ $user->gravatar }}" class="gravatar img-circle" alt="Circular Image">
 <h1>{{ $user->name }}</h1>
 <span><a href="{{ action('UsersController@show', $user->id) }}">View my Profile</a></span>
 <span>{{ str_plural('Micropost') }} {{ count($user->microposts) }}</span>