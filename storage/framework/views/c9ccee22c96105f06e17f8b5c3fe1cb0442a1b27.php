<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, my-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Campus Choir')); ?></title>

    <!-- Scripts -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico"> 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-kit.css" rel="stylesheet" />
  
</head>
<body>
<div class="white-bg">
		    <div class="container">
		      <div class="section-top-border">


		       
              <div class="row">
                 
                  <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title ">Reg Details</h4>
                              <p class="card-category"> All registrations so far</p>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                    <tr><th>
                                      ID
                                    </th>
                                    <th>
                                      Passport
                                    </th>
                                    <th>
                                      Name
                                    </th>
                                    <th>
                                      State
                                    </th>
                                    <th>
                                      School
                                    </th>
                                    <th>
                                      Gender
                                    </th>
                                    <th>
                                      Registered
                                    </th>
                                    
                                  </tr></thead>
                                  <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tbody>
                                    <tr>
                                      <td>
                                         <?php echo e($my->id); ?>

                                      </td>
                                      <td>
                                         <?php echo e($my->passport); ?>

                                      </td>
                                      <td>
                                          <?php echo e($my->firstname . $my->lastname); ?>

                                      </td>
                                      <td>
                                      <?php echo e($my->state); ?>

                                      </td>
                                      
                                      <td >
                                      <?php echo e($my->school); ?>

                                      </td>
                                      <td >
                                      <?php echo e($my->gender); ?>

                                      </td>
                                      <td>
                                      <?php echo e($my->created_at->diffForHumans()); ?>

                                      </td>
                                    
                                   
                                      
                                      
                                    </tr>
                                  </tbody>
                                    

                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                              </div>
                            </div>
                            <div class="card-header card-header-primary">
                              <h4 class="card-title ">Information About Your Uniforms/ Health</h4>
                              <p class="card-category"> Your registrations so far</p>
                            </div>    
                             <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                   
                                    <th>
                                      Health Status
                                    </th>
                                    <th>
                                      Peach 
                                    </th>
                                    <th>
                                      White
                                    </th>
                                    <th>
                                     Mint Green
                                    </th>
                                    <th>
                                     Orange
                                    </th>
                                    <th>
                                     Black
                                    </th>
                                    <th>
                                      Navy Blue
                                    </th>
                                    <th>
                                      Ties
                                    </th>
                                  </tr></thead>
                                  <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tbody>
                                    <tr>
                                      <td>
                                         <?php echo e($my->health_status); ?>

                                      </td>
                                      <td>
                                         <?php echo e($my->p_uniform); ?>

                                      </td>
                                      <td>
                                          <?php echo e($my->w_uniform); ?>

                                      </td>
                                      <td>
                                      <?php echo e($my->m_uniform); ?>

                                      </td>
                                      <td>
                                      <?php echo e($my->o_uniform); ?>

                                      </td>
                                      
                                      <td >
                                      <?php echo e($my->b_uniform); ?>

                                      </td>
                                      <td >
                                      <?php echo e($my->n_uniform); ?>

                                      </td>
                                      <td>
                                      <?php echo e($my->ties); ?>

                                      </td>
                                    
                                   
                                      <td>
                                      </td>
                                      
                                    </tr>
                                  </tbody>
                                    

                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                  </div>
                                
                                
                       
                 
               
                </div>
            </div>
        </div>
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