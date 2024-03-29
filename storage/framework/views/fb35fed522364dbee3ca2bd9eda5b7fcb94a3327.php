<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Choir Blog')); ?></title>

    <!-- Scripts -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico"> 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="<?php echo e(asset('css/material-kit.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/clean-blog.min.css')); ?>" rel="stylesheet">
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
                    <i class="material-icons">home</i> Home
                    </a>
                  
                </li>

                 
                </ul>
            </div>
            
        </nav>
        

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo e(asset('img/post-bg.jpg')); ?>'); ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h4>Get Insight</h4>
              <span class="subheading">A word of Knowledge can change you</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="feature-area pt-100 pb-100  relative" >
      <div class="main ">
        <div class="row white-bg">
          <div class="col-md-8 col-sm-8 col-lg-8">
            <div class="py-4 container">
                    <?php echo $__env->yieldContent('title'); ?>
                
            </div>
            <main class="py-4 container">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
          </div>
          
        </div>  
      </div>
    </section>
    <!-- Footer -->
    
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
            <a href="<?php echo e(route('about')); ?>">
              About Us
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('blog')); ?>">
             Blog
            </a>
          </li>
          <li>
            <a href="/image-gallery ">
              our Gallery
            </a>
          </li>
        </ul>
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
            
          </div>
        </div>
      </nav>
      <div class="copyright float-right">
        Campus Choir &copy;
        <script>
           document.write(new Date().getFullYear())
        </script>
      </div>
    </div>
  </footer>

   <script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('js/popper.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('js/bootstrap-material-design.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>
 
  
  <script src="<?php echo e(asset('js/nouislider.min.js')); ?>" type="text/javascript"></script>
  
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('js/material-kit.js')); ?>" type="text/javascript"></script>    
    <script src="<?php echo e(asset('js/clean-blog.min.js')); ?>"></script>

  </body>

</html>