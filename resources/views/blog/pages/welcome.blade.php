@extends('layouts.blog')
@section('title', '| Home')

@section('content')
    
    <div class="row">
    <div class="col-md-3 ">
                   
                    <form class="form-inline my-4 my-lg-0">
                        <input class="form-control" type="search" placeholder="Search">
                        <hr>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
        </div>
        <div class="col-md-10 ">

            @foreach($posts as $post)
                <article id="{{$post->id}}" class="">
	                <header class="">
                        <h3 class=""><a href="{{ url('blog/'.$post->slug) }}">
                            {{ $post->title }}</a>
                        </h3>
                     
                        <div class="">
                            <span class="posted-on"><i class="fa fa-calendar"></i> 
                                <a href="{{ url('blog/'.$post->slug) }}" rel="bookmark">
                                    <time class="entry-date published" datetime="">{{$post->created_at->diffForHumans()}}</time>
                                </a>
                            </span>
                            <h4>
                            <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#">{{$post->name}}</a>
                            </span>
                            </h4>
                            
                            
                        </div><!-- .entry-meta -->
                    </header> 
                    
                    <div class="">
                        
                            <a href="#" title="{{ $post->title}}" >
                                <img width="730" height="410" src="{{ asset('images/' . $post->image) }}" class="thumbnail col-sm-10 wp-post-image" alt="" />		
                            </a>
                       
                        <div class="col-sm-10">
                            <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) >250 ? '...' : "" }}</p>
                        </div>
                        <p><a class="btn btn btn-primary read-more" href="{{ url('blog/'.$post->slug) }}">Continue reading <i class="fa fa-chevron-right"></i></a></p>

                        <a href="{{ url('blog/'.$post->slug) }}" title="{{ $post->title}}"></a>
                     </div>

                    <hr class="section-divider">
                </article>
                
            @endforeach
        </div>
        
        
    </div>
@endsection