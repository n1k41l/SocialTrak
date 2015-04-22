@extends('layouts.application')
@section('content')
<div class="row">
   <div class="col-md-4">
      <aside>
         <section class="user_info">
            @include('layouts.shared.user_info')
         </section>
         <section class="stats">
            @include('layouts.shared.stats')
         </section>
      </aside>   
   </div>
   

   <div class="col-md-8">
   @include('users._follow_form')
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