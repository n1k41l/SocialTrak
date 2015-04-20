<li id="micropost-{{ $micropost->id  }}">
    <img src="{{ $micropost->user->gravatar }}" class="gravatar img-circle" alt="Circular Image"> 
    <span class="user"><a href="{{ action('UsersController@show', $micropost->user_id) }}">{{ $micropost->user->name }} </a></span>
    <span class="content">{{ $micropost->content }}</span>
    <span class="timestamp">
        Posted {{ $micropost->updated_at->diffForHumans() }}

        @if(Auth::user()->id == $micropost->user_id)
            {!! delete_form(['microposts.destroy', $micropost->id]) !!}
        @endif
    </span>
</li>