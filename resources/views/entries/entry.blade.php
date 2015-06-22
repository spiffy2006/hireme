@extends('master')

@section('content')
<section id="entries">
	<h3>{{$entry->title}}</h3>
	<p>{{$entry->entry}}</p>
</section>
@stop