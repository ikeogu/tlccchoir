@extends('layouts.app')

@section('content')

    <div class="" style="background-image: url('img/bg7.jpg'); background-size: cover; background-position: ; ">
        <div class="container" >
             <div class="row">
                <div class="col-lg-6 col-md-6 ml-auto mr-auto" style="padding-top:6px; padding-bottom:100px;">
                    <div class="card card-login" >
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">{{ __('Update Song') }}</h4>
                        </div>    
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
                                <div class="col-lg-8 col-md-8">
                                   <h3 class="mb-30">Song Details</h3>
                                    <form  method="POST" action="{{ route('songs.update', [$songPresentation->id]) }}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        
                                        <div class="mt-10">
                                            <input id="title" type="text"    class="form-control" name="name" value="{{ $songPresentation->title}}" required autofocus>
                                                @if ($errors->has('title'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                @endif
                                        </div>
                            
                                        <div class="mt-10">
                                            <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" value="{{ $songPresentation->author }}">
                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('author') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="mt-10">
                                            <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ $songPresentation->type }}" >
                                            @if ($errors->has('type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('type') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                            
                            
                                        <div class="input-group-icon mt-10">
                                            <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ $songPresentation->body }}" rows="7" maxlength="5000">
                                            {{$songPresentation->body}}
                                            </textarea>
                                            @if ($errors->has('body'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('body') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                            
                                        <div class="form-group row mb-0">
                                            <button class="btn btn-primary" type="submit"> {{ __('Update') }}</button>
                                        </div>							
                                                        
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>             
        
@endsection
