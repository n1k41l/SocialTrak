{!! Form::open(['method' => 'DELETE', 'route' => ['relationships.destroy', $user->id]]) !!}
    {!! Form::hidden('userIdToUnfollow', $user->id) !!}
    <button type="submit" class="btn btn-danger">Unfollow {{ $user->username }}</button>
{!! Form::close() !!}