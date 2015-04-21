{!! Form::open(['method' => 'POST', 'route' => 'relationships.store']) !!}
    {!! Form::hidden('follow_id', $user->id) !!}
    {!! Form::submit('Follow', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}