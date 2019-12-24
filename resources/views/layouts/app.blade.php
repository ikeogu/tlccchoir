<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
  <link href="{{ secure_asset('css/material-kit.css')}}" rel="stylesheet" />
  
  
  
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
                        <i class="material-icons">layers</i> Register
                    </a>
                    <a href="{{route('mgbidi2020.create')}}" class="dropdown-item">
                        <i class="material-icons">content_paste</i> Register for Mgbidi 2020
                    </a>
                    <a href="{{route('regmem')}}" class="dropdown-item">
                        <i class="material-icons">content_paste</i> Mgbidi 2019 Attendance
                    </a>
                    <a href="{{route('regmem2')}}" class="dropdown-item">
                      <i class="material-icons">content_paste</i> Mgbidi 2020 Attendance
                  </a>
                  <a href="/write_song" class="dropdown-item">
                    <i class="material-icons">music_note</i>Present  a Song
                  </a>
                    <a href="songs" class="dropdown-item">
                      <i class="material-icons">music_note</i> View songs
                    </a>
                    <a href="{{ route('login') }}" class="dropdown-item">
                        <i class="material-icons">arrow_right</i> Login
                    </a>
                    </div>
                </li>
                <li class="nav-item">
                <a href="{{route('blog')}}" class="nav-link" >
                      <i class="material-icons"></i> Blog
                </a>
              </li>
              <li class="nav-item">
                <a href="podcast" class="nav-link">
                      <i class="material-icons"></i> Podcast
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('noe')}}" class="nav-link">
                      <i class="material-icons"></i> NOE 2019
                </a>
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
                      <a href="/home" class="dropdown-item">
                          <i class="material-icons">person</i> User Profile
                      </a>
                      <a href="{{route('users.edit',[Auth::user()->id])}}" class="dropdown-item">
                          <i class="material-icons">person</i> Edit Profile
                      </a>

                      <a href="/write_song" class="dropdown-item">
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

        <main class="py-4">
            @yield('content')
        </main>

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
            <a href="{{route('blog')}}">
             Blog
            </a>
          </li>
          <li>
            <a href="/image-gallery ">
              our Gallery
            </a>
          </li>
        </ul>
      </nav>
      {{-- <div class="copyright float-right">
        Campus Choir &copy;
        <script>
           document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="#" target="_blank">Creative Tim</a> 
      </div> --}}
    </div>
  </footer>
     
  <script src="{{secure_asset('js/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{secure_asset('js/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{secure_asset('js/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{secure_asset('js/moment.min.js')}}"></script>
 
  
  <script src="{{secure_asset('js/nouislider.min.js')}}" type="text/javascript"></script>
  
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{secure_asset('js/material-kit.js')}}" type="text/javascript"></script>      
</body>
</html>
