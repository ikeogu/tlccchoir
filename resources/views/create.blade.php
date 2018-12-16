      
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="nav-open">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Campus Choir') }}</title>

    <!-- Scripts -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico"> 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-kit.css" rel="stylesheet" />
  
</head>
<body class="index-page sidebar-collapse">  
    <nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                <h4> <strong>Campus Choir</strong></h4> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="material-icons">apps</i> Join Us
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                    <a href="{{ route('register')}}" class="dropdown-item">
                        <i class="material-icons">layers</i> Be A Member
                    </a>
                    <a href="mgbidi-2019/create" class="dropdown-item">
                        <i class="material-icons">content_paste</i> Mgbidi Registration
                    </a>
                    <a href="songs" class="dropdown-item">
                      <i class="material-icons">music_note</i>View Songs
                    </a>
                    <a href="{{ route('login') }}" class="dropdown-item">
                        <i class="material-icons">arrow_right</i> Login
                    </a>
                    </div>
                </li>

                @if(Auth::user())
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                 <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <i class="material-icons">dashboard</i> Dashboard
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                      <a href="/profile" class="dropdown-item">
                          <i class="material-icons">person</i> User Profile
                      </a>

                      <a href="songs/create" class="dropdown-item">
                              <i class="material-icons">music_note</i>Present  a Song
                      </a>
                      <a href="{{route('withsonginprofile')}}" class="dropdown-item">
                              <i class="material-icons">arrow_right</i>View Songs
                      </a>
                        <div class="dropdown-item"> 
                        <a class="" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        <i class="material-icons">arrow_left</i> {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>  
                    </div>  
                  </li>  
                      
               
               @endif         
            </ul>
            </div>
            </div>
        </nav>

            <div class="" style="background-image: url('../img/bg7.jpg'); background-size: cover; background-position: ; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-6 col-md-6 ml-auto mr-auto" style="padding-top:60px; padding-bottom:100px;">
                            <div class="card card-login" >
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title">{{ __('Write Song') }}</h4>
                                </div> 
                                <div class="row">
                                    <div class="blockquote undefined">

                                                <h2>Why You Should Teach us your Song.</h2>
                                                <hr >
                                                <p class="description">Song is't meant for a person execpt in some cases loved ones, but there is fulfillment of the heart when you have an audience listening to your song and for it to gain popularity based on the assimilation of your audience plus the Melody.</p>
                                            
                                    </div>
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
                                            <form  method="POST" action="{{ route('songs.store') }}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                
                                                <div class="mt-10">
                                                    <input id="title" type="text"    class="form-control" name="title"  required autofocus placeholder="SOng Title">
                                                        @if ($errors->has('title'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('title') }}</strong>
                                                                </span>
                                                        @endif
                                                </div>
                                    
                                                <div class="mt-10">
                                                    <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" placeholder="Song Writter ">
                                                        @if ($errors->has('author'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('author') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                                <div class="mt-10">
                                                
                                                    <select name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}">
                                                        <option value="Rivival Song"> Rivival Song  </option>
                                                        <option value="Salvation Song"> Salvation Song </option>
                                                        <option value="Marriage Song"> Marriage Song </option>
                                                    </select>
                                                    @if ($errors->has('type'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('type') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                    
                                    
                                                <div class="input-group-icon mt-10">
                                                    <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body"  rows="7" maxlength="5000">
                                                    
                                                    </textarea>
                                                    @if ($errors->has('body'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('body') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                
                                    
                                                <div class="form-group row mb-0">
                                                    <button class="btn btn-primary" type="submit"> {{ __('Send') }}</button>
                                                </div>							
                                                                
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>             
        
                <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="http://tlccrmofficial.blogspot.com/">
              The Lord's Chosen blog
            </a>
          </li>
          <li>
            <a href="{{ route('about')}}">
              About Us
            </a>
          </li>
          <li>
            <a href="">
             
            </a>
          </li>
          <li>
            <a href="/image-gallery ">
              our Gallery
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        Campus Choir &copy;
        <script>
           document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="#" target="_blank">Creative Tim</a> 
      </div>
    </div>
  </footer>
    </div>    
  <script src=" js/jquery.min.js" type="text/javascript"></script>
  <script src="js/popper.min.js" type="text/javascript"></script>
  <script src="js/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="js/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src=" js/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/nouislider.min.js" type="text/javascript"></script>
  
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="js/material-kit.js" type="text/javascript"></script>      
</body>
</html>

  

