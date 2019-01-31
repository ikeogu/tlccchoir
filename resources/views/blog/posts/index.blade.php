@extends('layouts.blog')

@section('content')


<div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <th>#</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                                    </div>  
                                    <div  class="col-sm-4">  
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
            <div class="text-center">{!! $posts->links(); !!}</div>
        </div>
    
</div>   
@endsection
