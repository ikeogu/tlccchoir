@extends('layouts.blog')

@section('title')
Edit Post
@endsection

@section('content')
@include('layout.adminnav')

	<div class="container">
		<div class="col-md-12">
			<h1>Edit {{ $post->title }}</h1>
      
      {{ Form::model($post, array('route' => array('admin.posts.update', $post->id), 'method' => 'PUT')) }}
  				<div class="form-group">
  					@if(!empty($errors->first('title')))
  						<div class="alert alert-danger">{{ $errors->first('title') }}</div>
  					@endif
    				{{ Form::label('title', 'Post Title') }}
    				{{ Form::text('title', $value = null, array('class' => 'form-control', 'placeholder' => 'Your Blog Post Title')) }}
  				</div>

  				<div class="form-group">
  					@if(!empty($errors->first('body')))
  						<div class="alert alert-danger">{{ $errors->first('body') }}</div>
  					@endif
    				{{ Form::label('body', 'Blog Body/Content') }}
    				{{ Form::textarea('body', $value = null, array('class' => 'form-control', 'rows' => '7')) }}
  				</div>
  				{{ Form::submit('Publish Your Blog Post', array('class' => 'btn btn-default')) }}
			{{ Form::close() }}
		</div>
	</div>
@endsection
