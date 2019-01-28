@extends('layouts.blog')

@section('content')

<div class="col-sm-8 blog-main ">
  @foreach($post as $post)
  <a href="/posts/{{$post->id}}">
    <div class="blog-post">
      
        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">
                {{ $post->title }}
            </a>
            {{ $post->type }}
        </h2>
        <h4 class="blog-post-title">  {{ $post->author }} </h4>
        <p class="blog-post-meta">
            {{ $post->created_at->diffForHumans() }}
        </p>

        <p> {{ str_limit($post->body, $limit = 50, $end = '...') }}</p>
     
      <hr> 
    </div>
    </a> 
     @endforeach 
  </div>   
@endsection
