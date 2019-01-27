@extends('layouts.admin')

@section('content')
<div class="col-sm-8 blog-main">

    <h2>Create a Post</h2>

    <hr>

    <form method="POST" action="/posts">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Slug:</label>
            <input id="title" type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Author:</label>
            <input id="title" type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Category:</label>
            <input id="title" type="text" name="type" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" rows="6" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

    @include('layouts.errors')

</div><!-- /.blog-main -->
@endsection
