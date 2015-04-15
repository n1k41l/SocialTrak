@extends('layouts.application')
@section('content')
   {{ $user->name }}, {{ $user->email }}
@stop