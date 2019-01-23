@extends('layouts.blog')

@section('content')
    <div class="col-sm-8 blog-main">

      <h2>{{ $post->title}}</h2>

      {{ $post->body }}


      @if (count($post->comments))
          <hr>

          <div class="comments">
              <ul class="list-group">
                  @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                  @endforeach
              </ul>
          </div>
      @endif

      <hr>

      <div class="card">
          <div class="card-block">
              <form method="POST" action="/posts/{{ $post->id }}/comments">
                  @csrf

                  <div class="form-group">
                      <textarea name="body" rows="4" placeholder="Your comment here." class="form-control" required></textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Add</button>
                  </div>
              </form>

              @include('layouts.errors')
          </div>
      </div>

    </div><!-- /.blog-main -->
@endsection
