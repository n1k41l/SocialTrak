 <img src="{{ Auth::user()->gravatar }}" class="gravatar img-circle" alt="Circular Image">
 <h1>{{ Auth::user()->name }}</h1>
 <span><a href="{{ action('UsersController@show', Auth::user()->id) }}">View my Profile</a></span>
 <span>{{ str_plural('Micropost') }} {{ count(Auth::user()->microposts) }}</span>