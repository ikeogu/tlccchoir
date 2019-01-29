@extends('layouts.blog')

@section('content')
         
    
    <article class="col-sm-8 blog-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
          
                <h2 class="section-heading">{{$post->title}}</h2>

                <h4> {{$post->author}}</h4>

                <p>{{$post->type}}</p>

                <blockquote class="blockquote">{{$post->body}}</blockquote>

                 </div>
            </div>
        </div>
    </article>

    

        
          <hr>

          <div class="comments">
              <ul class="list-group">
                  @foreach ($comment as $comments)
                    <li class="list-group-item">
                        <strong>
                            {{ $comments->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comments->body }}
                    </li>
                  @endforeach
              </ul>
          </div>
      

      <hr>

      <div class="card">
          <div class="card-block">
              <form method="POST" action="/posts/{{$post->id}}/comments">
                  @csrf
                  <div class="form-group">
                      <input name="from_user"   class="form-control" required value="{{Auth::user()->name}}">
                  </div>
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
