@extends('hello')

@include('modular-cm::sidebar')

@section('login')
	<a href="{{ URL::route('logout') }}">Logout</a>
@stop

@section('dash')
	{{ Modular::hello() }}
@show