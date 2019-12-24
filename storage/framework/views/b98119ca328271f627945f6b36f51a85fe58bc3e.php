<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" >

  <head>
    <meta charset="utf-8" />
    
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Noe Dashboard')); ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <!-- Core Js FIle-->
    <link href="<?php echo e(secure_asset('css/material-dashboard.css')); ?>" rel="stylesheet" />
    

    <script src="<?php echo e(secure_asset('js/core/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(secure_asset('js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(secure_asset('js/core/bootstrap-material-design.min.js')); ?>"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="<?php echo e(secure_asset('js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(secure_asset('js/plugins/chartist.min.js')); ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo e(secure_asset('js/plugins/bootstrap-notify.js')); ?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(secure_asset('js/material-dashboard.js')); ?>"></script>
    
    </head>

    <body class="dark-edition">
      <div class="wrapper ">
          <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo e(secure_asset('img/sidebar-2.jpg')); ?>">
          <!--
              Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

              Tip 2: you can also add an image using data-image tag
          -->
          <div class="logo">
              <a href="#" class="simple-text logo-normal">
              Admin DashBoard
              </a>
          </div>
          <div class="sidebar-wrapper">
              <ul class="nav">
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo e(route('allteam')); ?>">
                  
                  <p>All Teams</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('short_list.index')); ?>">
                 
                  <p>ShortListed Team</p>
                  </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo e(route('short_list.create')); ?>">
               
                <p>ShortList Team</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
               
                <p>Add to Image Gallery</p>
                </a>
            </li>
             
             
            </ul>
          </div>
          </div>
          <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
              <div class="container-fluid">
              <div class="navbar-wrapper">
                  
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                  
                 
              </div>
              </div>
          </nav>
         
          <main class="py-4">
              <?php echo $__env->yieldContent('noes'); ?>
          </main>
          <footer class="footer">
          <div class="container-fluid">
         
           
          </div>
        </footer>
        </div>
      </div>
    </body>
</html>