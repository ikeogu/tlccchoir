<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title><?php echo e(config('app.name', 'Campus Choir')); ?></title>

    <!-- Scripts -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico"> 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
    <link rel="stylesheet" href="css/noe.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
  
</head>

<body>
    


    <div id="hamburger-menu">
        <div class="bar-1"></div>
        <div class="bar-2"></div>
        <div class="bar-3"></div>
    </div>

    <section class="nav-menu">
        
             <h1> <img src="/img/logo2.png" style="height:30px; width:100px;">NOE 2019</h1>
       
       
        <nav>
            <a href="#our-services">Info</a>
            <a href="#about-us">About</a>
            <a href="#gallery">Gallery</a>
            <a href="#testimonials">Judges</a>
            <a href="#contact">Add your team</a>
        </nav>
    </section>

    <header class="header-info">
        <article>
            <h3  style="color:white;">Welcome to</h3>
            <h1>NOTES OF ENAHKORRE <span style="color:red;">4</span></h1>
            <h3  style="color:white;"> Theme</h3><br>
            <h4 class="description">
               <span style="color:white;">Symphony </span> <span style="color:black;"> OF THE </span>ROYAL PRIESTHOOD</h4>
            
        </article>
    </header>
    <main class=" container py-4">
     <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
        <div>
            <?php echo $__env->yieldContent('noe'); ?>
        </div>
    </main>
    <footer class="footer-layout">
        <p>Copyright <a href="<?php echo e(route('admin')); ?>">NOE 2019 </a> Designed by DeraTech </p>
    </footer>
      
  <script src="<?php echo e(asset('js/noe.js')); ?>" type="text/javascript"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" type="text/javascript"></script>
  <script src="<?php echo e(asset('js/bootstrap.js')); ?>" type="text/javascript"></script>

  <script src="<?php echo e(asset('js/swiper.min.js')); ?>" type="text/javascript"></script>
  <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
  
</body>
</html>