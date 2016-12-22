@extends('layout.template')

@section('title','Find by tag')

@section('blog-title',$data->name)

@section('content')
	@foreach ($data->articles->data as $article)
		<div class="blog-post">
			<h2 class="blog-post-title"> {{ $article->title }}</h2>
			<p class="blog-post-meta"> {{ $article->published_at }} by <a href='#'>{{ $article->author }}</a></p>
			<p> {{ $article->intro }} </p>
			<p><a href="{{ route('article.show',$article->id) }}">See more</a></p>
		</div>
	@endforeach
@endsection