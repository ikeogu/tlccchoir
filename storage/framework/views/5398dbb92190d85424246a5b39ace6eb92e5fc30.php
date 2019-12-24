 
<?php $__env->startSection('content'); ?> 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> All Registered Members of the Campus Choir</h4>
                  <p class="card-category">From Various state</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                            State
                        </th>
                        <th>
                          Institution
                        </th>
                        <th>
                          Discipline
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          Email
                        </th>
                      </thead>
                      <tbody>
                         <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($user->id); ?>

                                </td>
                                <td>
                                <?php echo e($user->name); ?>

                                </td>
                                <td>
                                <?php echo e($user->state); ?>

                                </td>
                                <td>
                                <?php echo e($user->institution); ?>

                                </td>
                                <td>
                                <?php echo e($user-> discipline); ?>

                                </td>
                                <td>
                                <?php echo e($user-> phone); ?>

                                </td>
                                <td>
                                <?php echo e($user-> gender); ?>

                                </td>
                                <td>
                                <?php echo e($user-> email); ?>

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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>