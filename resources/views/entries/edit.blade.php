@extends('master')

@section('content')
	{!! Form::model($entry, ['method' => 'PATCH', 'action' => ['EntriesController@update', $entry->id]]) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::text('tags', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('entry', 'Entry') !!}
			{!! Form::textarea('entry', null, ['class' => 'form-control']) !!}
		</div>

		<div class="checkbox">
			<label>
				{!! Form::checkbox('public', 1, true) !!} Public
			</label>
		</div>

		{!! Form::submit('Add Entry', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
@stop