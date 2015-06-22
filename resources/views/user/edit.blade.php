@extends('master')

@section('content')
	{{!! Form::model($user, 'method' => 'PATCH', 'action' => ['UserController@update', $user->id]) !!}}

	{{!! Form::close() !!}}
@stop