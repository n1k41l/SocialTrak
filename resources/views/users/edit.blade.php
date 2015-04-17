@extends('layouts.application')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Account: {!! $user->name !!}</div>
                    <div class="panel-body">

                        @include('errors.errors')

                        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
                        <!-- Name Form Input -->
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Email Form Input -->
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Form Button -->
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
                        </div>


                        {!! Form::close() !!}

                        <div class="gravatar_edit">
                            <img src="{{ $user->gravatar }}" class="gravatar img-circle" alt="Circular Image">
                            <a href="http://gravatar.com/emails" target=_blank>change</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop