@extends('layouts.app')
@section('content')
	{{ Form::model($news, ['route' => ['news.store']]) }}
	
	{{ Form::label('title', 'News title') }}
	{{ Form::text('title', $news->title) }}

	{{ Form::label('desc', 'News Desc') }}
	{{ Form::textArea('desc', $news->desc) }}

	{{ Form::label('published', 'published?') }}
	{{ Form::checkbox('published', $news->published) }}

	{{ Form::label('publishedDate', 'published Date') }}
	{{ Form::text('publishDate', $news->publishDate) }}

	{{ Form::submit('Зберегти') }}
	{{ Form::close() }}

	<script type="text/javascript">
		$('form').submit(function(){
			console.log(this.elements);
			
		})

	</script>
@endsection