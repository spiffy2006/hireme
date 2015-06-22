@extends('master')

@section('content')
	<h1>Home Page</h1>
	@include('entries/_entries', ['entries' => hireme\Entries::all()])
@stop