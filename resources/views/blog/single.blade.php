@extends('layouts.blog')

@section('title', "| $post->title")
@section('content')
<div class="row" style="margin:20px;">
    <div class="col-md-9 align-center" >
    <img src="{{ asset('images/' . $post->image) }}" height="400" width="100%" alt="Image not working."/>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <hr>
        <p>Posted in: {{ $post->category->name }}</p>
    </div>
</div>
    <hr>

    
    <div class="container">
        <div class="section text-center ">
            <div class="content">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
                @endif
            </div>
        </div>  
    </div>    
    <div class="row " style="margin:20px;">
        <div class="comment-form" class="col-md-8 ">
            {{ Form::open(['route' => ['comment.store', $post->id], 'method' => 'POST']) }}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name', "Name:") }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-12">
                        {{ Form::label('comment', "Comment:") }}
                        {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5' ]) }}

                        {{ Form::submit('Add Comment', ['class' => 'btn btn-primary  btn-spacing-top']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    <hr>
    <div class="row" style="margin:20px;">
            @if($comments)
            {{$comments->count()}} Comments
            <div>
                @foreach($comments as $comment)
                    <div class="panel-body">
                        
                            <div class="" >
                                <h5>{{ $comment->name }}</h5>
                                <blockquote>{{ $comment->comment }}</blockquote>
                            </div>
                            
                        
                    </div>
                @endforeach
            </div>
            @endif
    </div>
@endsection