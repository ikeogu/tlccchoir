@extends('layouts.admin')

@section('content')

<div class="col-sm-8 blog-main">

    <h2>Create a Post</h2>

    <hr>

    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
                {{ Form::label('title', 'Title:', ['class' => 'form-spacing-top']) }}
                
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3', 'maxlength' => '100')) }}

                {{ Form::label('author', 'Author:', ['class' => 'form-spacing-top']) }}
                {{ Form::text('author', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3', 'maxlength' => '20')) }}
                
                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}
               
                {{ Form::label('category_id', 'Category:') }}
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('tags', 'Tag:') }}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('featured_image', 'Upload Featured Image') }}
                {{ Form::file ('featured_image') }}

                {{ Form::label('body', 'Post Body:', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}
                
                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {!! Form::close() !!}
    @include('layouts.errors')

</div><!-- /.blog-main -->
@endsection
