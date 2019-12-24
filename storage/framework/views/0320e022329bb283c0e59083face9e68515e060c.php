 
<?php $__env->startSection('content'); ?> 
<div class="col-md-12" style="padding-top:60px;">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> List of Songs in Campus Choir</h4>
                  <p class="card-category">From Various Song Writters</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                       
                        <th>
                            ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Author
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          SOng
                        </th>
                        <th>
                          Written
                        </th>
                      </thead>
                      <tbody>
                         <?php $__currentLoopData = $allsongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($song->id); ?>

                                </td>
                                <td>
                                <?php echo e($song->title); ?>

                                </td>
                                <td>
                                <?php echo e($song->author); ?>

                                </td>
                                <td>
                                <?php echo e($song->type); ?>

                                </td>
                                <td>
                                <?php echo e(str_limit($song->body, $limit = 50, $end = '...')); ?>

                                </td>
                                <td>
                                <?php echo e($song-> created_at->diffForHumans()); ?>

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