@extends('master')

@section('content')
<section id="entries">
	@foreach ($entries as $entry)
		<h3>{{$entry->title}}</h3>
		<p>{{$entry->entry}}</p>
	@endforeach
</section>
@stop