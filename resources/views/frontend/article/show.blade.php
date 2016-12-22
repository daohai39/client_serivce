@extends('layout.template')

@section('title','Article')

@section('blog-title','Client Aiw')

@section('content')
		<div class="blog-post">
			<h2 class="blog-post-title"> {{ $article->title }}</h2>
			<p class="blog-post-meta"> {{ $article->published_at }} by <a href='#'>{{ $article->author }}</a></p>
			<p><b>{{ $article->intro }} </b></p>
			<p> {{ $article->content }} </p>
			<p>
				<strong>Tags: </strong>
				@foreach($article->tags->data as $tag)
				<span class="tag">
					<a href="{{ route('tag.show',$tag->id) }}"> {{ $tag->name }}</a>
				</span>
				@endforeach
			</p>
			<p>
				<strong>Category: </strong>
				<a href="{{ route('category.show', $article->category->data->id ) }}">{{$article->category->data->name}}</a>
			</p>

			<hr>
			<form class="commentBox">
				 <div class="form-group" method="post">
				    <label for="exampleInputName2">Name</label>
				    <input type="text" class="form-control" name="author" placeholder="Your name">
				  </div>
				<textarea class="form-control" rows="3" name="content" placeholder="Add a comment..."></textarea>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<hr><!--  -->

			<div class="comments">
				<ul class="commentList">
					@foreach($article->comments->data as $comment)
						<li>
							<div class="commentAuthor">
								<p><strong>{{ $comment->author }} says: </strong></p>
							</div>
							<div class="commentText">
		                    	<p class="">{{ $comment->content }}</p> <span class="date sub-text">on {{$comment->commented_at}}</span>

		                	</div>
						</li>
					@endforeach	
				</ul>
			</div>

			<div class="side-bar">
				<h3>Related articles</h3>
				<ul>
					@foreach($article->relates->data as $article)
						<li>
							<a href="{{ route('article.show', $article->id) }}">{{ $article->title}} </a>
						</li>
					@endforeach
				</ul>
			</div>        
		</div>
@endsection










@push('scripts')
<script>
   $(document).ready(function()
   {
   		var submit = $("button[type='submit']");

   		submit.click(function()
   		{
   			var author = $("input[name='author']").val();
   			var content = $("textarea[name='content']").val();
 			if(author == ''){
           		 alert('Please enter name');
           		 return false;
      		 }
         
	        if(content == ''){
	            alert('Please enter content');
	            return false;
	        }
   			var data = $('form').serialize();

   			$.ajax({
   				type: 'POST',
   				url: 'http://news.dev/api/v1/article/{{ $article->id}}/comment',
   				data:data,
   				success: function (data)
   				{
   					if (data == 'false')
   						alert('fail');
   					else 
   						$(".commentList").html(data);
   				}
   			});
   		});
   });


</script>
@endpush
