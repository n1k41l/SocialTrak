<li id="micropost-{{ $micropost->id  }}">
    <img src="{{ $micropost->user->gravatar }}" class="gravatar img-circle" alt="Circular Image"> 
    <span class="user"><a href="{{ action('UsersController@show', $micropost->user_id) }}">{{ $micropost->user->name }} </a></span>
    <span class="content">{{ $micropost->content }}</span>
    <span class="timestamp">
        Posted {{ $micropost->updated_at->diffForHumans() }}
    </span>
</li>