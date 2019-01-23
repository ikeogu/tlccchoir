@extends('layouts.blog')

@section('title')
{{$title}}
@endsection

@section('content')


<div class="container">
@if ( !$posts->count() )
<strong>There is no post till now. Login and write a new post now!!!</strong>
@else
    <div class="row">
       
                    
         @foreach( $posts as $post )
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="{{ url('/'.$post->slug) }}">
                        <h2 class="post-title">
                        <a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
                            @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
                                @if($post->active == '1')
                                <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Post</a></button>
                                @else
                                <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a></button>
                                @endif
                            @endif
                        </h2>
                        
                    </a>
                    <p class="post-meta">Posted by
                        <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a>
                        {{ $post->created_at->format('M d,Y \a\t h:i a') }}
                    </p>
                    <div class="list-group-item">
                        <article>
                            {!! str_limit($post->body, $limit = 150, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
                        </article>
                    </div>
                </div>
                <hr>

                
            </div>
        @endforeach
        {!! $posts->render() !!}
    </div>
    @endif
</div>
@endsection
