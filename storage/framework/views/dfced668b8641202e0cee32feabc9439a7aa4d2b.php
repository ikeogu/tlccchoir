<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" >

  <head>
    <meta charset="utf-8" />
    
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Admin Dashboard')); ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <!-- Core Js FIle-->
    <link href="<?php echo e(asset('css/material-dashboard.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('js/core/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/core/bootstrap-material-design.min.js')); ?>"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="<?php echo e(asset('js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('js/plugins/chartist.min.js')); ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo e(asset('js/plugins/bootstrap-notify.js')); ?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('js/material-dashboard.js')); ?>"></script>
    
    </head>

    <body class="dark-edition">
      <div class="wrapper ">
          <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo e(asset('img/sidebar-2.jpg')); ?>">
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
                  <a class="nav-link" href="#">
                  <i class="material-icons">dashboard</i>
                  <p>Dashboard</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('user')); ?>">
                  <i class="material-icons">person</i>
                  <p>User Profile</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('allmembers')); ?>">
                  <i class="material-icons">content_paste</i>
                  <p>List of Members</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('gzone')); ?>">
                  <i class="material-icons">location</i>
                  <p>Geopolitical Zones</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a  class="nav-link" href="<?php echo e(route('makeblog')); ?>">
                        <i class="material-icons">apps</i> make blog post
                  </a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link" href="<?php echo e(route('categories.index')); ?>">
                        <i class="material-icons">apps</i> Blog Catergory
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('tags.index')); ?>" class="nav-link" >
                        <i class="material-icons">apps</i> Blog Tags
                </a>
              </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('blog')); ?>" class="nav-link" >
                        <i class="material-icons">apps</i>View Blog
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo e(route('managepodcast')); ?>" class="nav-link" >
                        <i class="material-icons">podcasts</i>Manage Podcast
                </a>
              </li>
              
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('allsongs')); ?>">
                  <i class="material-icons">music_note</i>
                  <p>List of Songs</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('mgbidi2019')); ?>">
                  <i class="material-icons">bubble_chart</i>
                  <p>Attendance for Mgbidi Camp</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('image-gallery.create')); ?>">
                  <i class="material-icons">location_ons</i>
                  <p>Upload Image to Gallery</p>
                  </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="<?php echo e(route('delup')); ?>">
                  <i class="material-icons">notifications</i>
                  <p>Delect uploaded images</p>
                  </a>
              </li>
              
            </ul>
          </div>
          </div>
          <div class="main-panel">
         
          <main class="py-4">
              <?php echo $__env->yieldContent('content'); ?>
          </main>
          <footer class="footer">
          <div class="container-fluid">
         
            <div class="copyright float-right" id="date">
              , made with <i class="material-icons">favorite</i> by
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
            </div>
          </div>
        </footer>
        <script>
          const x = new Date().getFullYear();
          let date = document.getElementById('date');
          date.innerHTML = '&copy; ' + x + date.innerHTML;
        </script>
      </div>
    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title"> Sidebar Filters</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger active-color">
              <div class="badge-colors ml-auto mr-auto">
                <span class="badge filter badge-purple active" data-color="purple"></span>
                <span class="badge filter badge-azure" data-color="azure"></span>
                <span class="badge filter badge-green" data-color="green"></span>
                <span class="badge filter badge-warning" data-color="orange"></span>
                <span class="badge filter badge-danger" data-color="danger"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="header-title">Images</li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="<?php echo e(asset('img/sidebar-1.jpg')); ?>" alt="">
            </a>
          </li>
          <li class="active">
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="<?php echo e(asset('img/sidebar-2.jpg')); ?>" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="<?php echo e(asset('img/sidebar-3.jpg')); ?>" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="<?php echo e(asset('img/sidebar-4.jpg')); ?>" alt="">
            </a>
          </li>
          <li class="button-container">
            <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
          </li>
          
          <li class="button-container">
            <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
              View Documentation
            </a>
          </li>
          <li class="button-container github-star">
            <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
          </li>
          <li class="header-title">Thank you for 95 shares!</li>
          <li class="button-container text-center">
            <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
            <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
            <br>
            <br>
          </li>
        </ul>
      </div>
    </div>
    <!--   Core JS Files   -->
    
    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

      });
    </script>
  </body>

</html>