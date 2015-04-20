@extends('layouts.application')
@section('content')
<div class="row">
   <aside class="col-md-4">
      <section class="user_info">
         <h1>
            <img src="{{ $user->gravatar }}" class="gravatar img-circle" alt="Circular Image">
            {{ $user->name }}
         </h1>
      </section>
   </aside>

   <div class="col-md-8">

   		@if(count($user->microposts) > 0)
   			<h3> Microposts ({{ count($user->microposts) }})</h3>
   			<ol class="microposts">
   				@foreach($microposts as $micropost)
   					@include('microposts._micropost', ['micropost' => $micropost])
   				@endforeach
   			</ol>
   			{!! $microposts->render() !!}
   		@endif
   </div>

</div>
@stop