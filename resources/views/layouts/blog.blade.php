<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Choir Blog') }}</title>

    <!-- Scripts -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico"> 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="{{asset('css/material-kit.css')}}" rel="stylesheet" />
  <link href="asset('css/clean-blog.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
</head>
<body class="index-page sidebar-collapse">  
    <nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                <h4> <strong>Campus Choir Blog</strong></h4> </a>
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
                    <a href="/" class=" nav-link" >
                    <i class="material-icons">apps</i> Home
                    </a>
                  
                </li>

                 
                </ul>
            </div>
            
        </nav>
        

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h4>Get Insight</h4>
              <span class="subheading">A word of Knowledge can change your attitude</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="row">
      <div class="col-md-8 col-sm-8 col-lg-8">
        <div class="py-4">
                @yield('title')
        </div>
        <main class="py-4">
            @yield('content')
        </main>
       </div>
       </div>
       <div class="col-md-3 col-sm-3 col-lg-4">
       @include('layouts.sidebar')
       </div> 

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              
            </ul>
            <p class="m-0 text-center text-white">Copyright &copy; {{ config('app.name') }} {{ date('Y') }}</p>
          </div>
        </div>
      </div>
    </footer>

   <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/moment.min.js')}}"></script>
 
  
  <script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>
  
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>    
    <script src="{{asset('js/clean-blog.min.js')}}"></script>

  </body>

</html>