<section id="comments">
	@foreach($comments as $comment)
		<span>{{ $comment->created_at }}</span>
		<p>{{ $comment->comment }}</p>
	@endforeach
	{!! Form::open(['url' => 'comments']) !!}
		<div class="form-group">
			{!! Form::label('comment', 'Leave a Comment') !!}
			{!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
		</div>

		{!! Form::hidden('user_id', \Auth::user()->id) !!}
		{!! Form::hidden('post_id', $entry->id) !!}

		{!! Form::submit('Add Comment', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
</section>