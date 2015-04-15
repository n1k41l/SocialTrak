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
</div>
@stop