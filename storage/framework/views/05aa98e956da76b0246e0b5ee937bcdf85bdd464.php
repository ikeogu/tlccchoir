 
<?php $__env->startSection('content'); ?> 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Members of the Campus Choir</h4>
                  <p class="card-category">Northern states</p>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="card-header-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         State
                        </th>
                       
                      </thead>
                      <tbody>
                         <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <tr>
                               
                                <td>
                                <a href="<?php echo e(route($state->route)); ?>">  <?php echo e($state->id); ?> </a>
                                </td>
                                <td>
                                <a href="<?php echo e(route($state->route)); ?>">  <?php echo e($state->name); ?> </a> 
                                </td>
                               
                            </tr>
                            </a> 
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>