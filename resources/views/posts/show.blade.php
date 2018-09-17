@extends('layout.app')

@section('content')

	   <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/{{$post->id}}" >
                {{$post->title}}
              </a>
            </h2>
            <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by {{$post->user->name}}</p>

            <p>{{$post->body}}</p>
          </div>

          <hr>

          <div class="comments">
          	<ul class="list-group">
          		@foreach($post->comments as $comment)

          			<li class="list-group-item">
          			          		
          				<strong>{{$comment->created_at->diffForHumans()}}</strong>
          				{{$comment->body}}
          			</li>
          		@endforeach
          	</ul>
          </div>
          <hr>

          <div class="card">
          	<div class="card-block">
          		<form method="POST" action="/posts/{{$post->id}}/comments">
          			{{csrf_field()}}
          			<div class="form-group">
          				<textarea placeholder="Leave your comment here" name="body" class="form-control"></textarea>
          			</div>
          			<button type="submit" class="btn btn-primary">Add Comment</button>

          		
          		</form>
          	</div>
          </div>

          @include('partials.errors')
          

      </div><!-- /.blog-main -->

@endsection