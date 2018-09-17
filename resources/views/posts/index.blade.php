@extends('layout.app')

@section('content')

	   <div class="col-sm-8 blog-main">
   @include('partials.flashmessage')

        @foreach($posts as $post)
          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/{{$post->id}}" >
                {{$post->title}}
              </a>
            </h2>
            <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by {{ $post->user->name }}</p>

            <p>{{$post->body}}</p>
          </div>
        @endforeach
          

      </div><!-- /.blog-main -->

@endsection