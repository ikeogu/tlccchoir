 
<?php $__env->startSection('content'); ?> 
    
<div class="content" style="padding-top:100px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                
                <div class="card-body">
                  <h4 class="card-title">Number of Choristers</h4>
                  <p class="card-category">
                    <span class="text-success"> <?php echo e(App\User::count()); ?> </span> .</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  updated
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                
                <div class="card-body">
                  <h4 class="card-title">Number of people Coming for Mgbidi</h4>
                  <p class="card-category"><?php echo e(App\Mgbidi::count()); ?></p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 
                  

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                
                <div class="card-body">
                  <h4 class="card-title">Number of Songs</h4>
                  <p class="card-category"><?php echo e(App\SongPresentation::count()); ?></p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>