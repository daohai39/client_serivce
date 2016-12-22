@extends('layout.template')

@section('title','Article')

@section('blog-title','All articles')

@section('content')
	@foreach ($articles as $article)
		<div class="blog-post">
			<h2 class="blog-post-title"> {{ $article->title }}</h2>
			<p class="blog-post-meta">by <a href='#'>{{ $article->author }}</a></p>
			<p> {{ $article->intro }} </p>
			<p><a href="{{ route('article.show',$article->id) }}">See more</a></p>
		</div>
	@endforeach

	<nav>
	 <ul class="pager">
	 	<li>
	 		<a href="{{$meta->pagination->links->previous or null}}">Previous</a>
	 	</li>
	 	<li>
	 		<a href="{{$meta->pagination->links->next or null}}">Next</a>
	 	</li>
	 </ul>
	</nav>
@endsection