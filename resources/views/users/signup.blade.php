@extends('layouts.application')
@section('content')
   <h2>Sign Up!</h2>
   <hr>

   <div class="row">
      <div class="col-md-8 col-md-offset-2">
      @include('errors.errors')
         {!! Form::open(['route' => 'users.store']) !!}
         <!-- Username Form Input -->
         <div class="form-group">
            {!! Form::label('name', 'Username:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
         </div>

         <!-- Email Form Input -->
         <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
         </div>

         <!-- Password Form Input -->
         <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
         </div>

         <!-- Password_confirmation Form Input -->
         <div class="form-group">
            {!! Form::label('password_confirmation', 'Password Confirmation:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
         </div>

         <div class="form-group">
            {!! Form::submit('Sign Up', ['class' => 'btn btn-primary']) !!}
         </div>

         {!! Form::close() !!}
      </div>
   </div>
@stop