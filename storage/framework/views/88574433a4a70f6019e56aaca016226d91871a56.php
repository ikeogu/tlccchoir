 
<?php $__env->startSection('content'); ?> 
    
    <div class="content" style="padding-top:120px">
        <div class="container-fluid">
        
            <div class="row">
            <?php $__currentLoopData = $zone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gzone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                    <div class="card card-chart">
                
                        <div class="card-body">
                        <a href="<?php echo e(route($gzone->route)); ?>">
                            <h4 class="card-title">Geopolitical Zones</h4>
                            <p class="card-category">
                                <span class="text-success"> <?php echo e($gzone->name); ?> </span> </p>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                                Number of states
                            <?php echo e($gzone->states); ?>

                            </div>
                        </a>
                        </div>
                    </div>    
                </div>
               
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
            </div>
          
        </div>   
    </div>
<?php $__env->stopSection(); ?>         

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>