@extends('layouts.blog')

@section('content')
  @foreach($post as $post)
    <div class="blog-post">
      <a href="/posts/{{ $post->id }}">
        <h2 class="blog-post-title">
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
            {{ $post->type }}
        </h2>
        <h4 class="blog-post-title">  {{ $post->author }} </h4>
        <p class="blog-post-meta">
            {{ $post->created_at->diffForHumans() }}
        </p>

        <p> {{ str_limit($post->body, $limit = 50, $end = '...') }}</p>
      </a>  
    </div>
     @endforeach 
@endsection
