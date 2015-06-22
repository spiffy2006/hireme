@extends('master')

@section('content')
	<h1>Signup</h1>

	{!! Form::open(['url' => 'users']) !!}
		<div class="form-group">
			{!! Form::label('first_name', 'First Name') !!}
			{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Last Name') !!}
			{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('username', 'Username') !!}
			{!! Form::text('username', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Add Entry', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
@stop