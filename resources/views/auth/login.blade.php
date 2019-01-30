@extends('layouts.app')

@section('content')

<div class="" style="background-image: url('img/bg7.jpg'); background-size: cover; background-position: ; ">
    <div class="container" >
    
      <div class="row">
        <div class="col-lg-6 col-md-6 ml-auto mr-auto" style="padding-top:123px; padding-bottom:100px;">
          <div class="card card-login" >
          
            <div class="card-header card-header-primary text-center">
                <h4 class="card-title">{{ __('Login') }}</h4>
                
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                                        @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-9">
                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                             @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-8">
                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                         

                            @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                            @endif
                         </div>
                         <div class="col-md-8">
                            <input type="checkbox" onclick="myFunction()">Show Password
                                <script type="text/javascript">
                                    function myFunction() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                    }
                                </script>
                          </div>         
                    </div>

                     
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <div class="row">
                                <div class= "col-sm-6 col-md-6 col-lg-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
                                <div class= "col-sm-6 col-md-6 col-lg-6">
                                <a type="button" class="btn btn-primary" href="{{route('register')}}">
                                    {{ __('Signup') }}
                                </a>
                                </div>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
                
@endsection
