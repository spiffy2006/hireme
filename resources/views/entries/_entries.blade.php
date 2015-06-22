<section class="entries">
	@foreach ($entries as $entry)
		<h3>
			<a href="{{ url('entries/entry/' . $entry->id) }}">{{ $entry->title }}</a>
		</h3>
		<p>{{$entry->entry}}</p>
	@endforeach
</section>