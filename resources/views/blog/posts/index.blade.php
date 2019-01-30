@extends('layouts.blog')

@section('content')


<div class="col-sm-8 blog-main ">
  @foreach($post as $post)
    
     <div class="blog-post">
        <a href="/posts/{{$post->id}}">
            <h2 class="blog-post-title">
                <a href="/posts/{{$post->id}}">
                    {{ $post->title }}
                </a>
            
            </h2>
            <h2>  {{ $post->type }}</h2>
            <h4 class="blog-post-title">  {{ $post->author }} </h4>
            <h5 class="blog-post-meta">
                {{ $post->created_at->diffForHumans() }}
            </h5>

            <p> {{ str_limit($post->body, $limit = 50, $end = '...') }}</p>
        </a> 
        
    </div>
    
    <hr> 
    @endforeach 
</div>   
@endsection
