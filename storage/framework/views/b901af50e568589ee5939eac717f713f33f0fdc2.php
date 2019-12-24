<?php $__env->startSection('content'); ?>



<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Choristers For Mgbidi 2020 Camp</h4>
                  <p class="card-category">From Various state</p>
                  <h3 class="card-category"><span text="class-success"> <?php echo e(App\Mgbidi2020::count()); ?> Registered. </h3>
                </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
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
                                    <th>
                                      Action
                                    </th>
                      </thead>
                      <tbody>

                        <?php $__currentLoopData = $users->sortBy('firstname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                       
      
                              <tr>
                                            
                                
                                <td>
                                    <?php echo e($user->firstname .' '. $user->lastname); ?>

                                </td>
                                <td>
                                <?php echo e($user->state); ?>

                                </td>
                                
                                <td >
                                <?php echo e($user->school); ?>

                                </td>
                                <td >
                                <?php echo e($user->gender); ?>

                                </td>
                                <td>
                                <?php echo e($user->created_at->diffForHumans()); ?>

                                </td>
                              
                              
                                <td>
                                  <a href="<?php echo e(route('downloads', $user->id)); ?>"> Download PDF</a>
                                </td>
                                
                              </tr>   
                            
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>