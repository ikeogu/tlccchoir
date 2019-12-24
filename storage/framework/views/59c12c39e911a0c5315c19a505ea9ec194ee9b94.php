<?php $__env->startSection('noes'); ?>
<div class="row">
    <div class="col-1" style="padding-top:30px;;" >
    </div>
    <div class="col-11" style="padding-top:30px;" >

        <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0"> <?php echo e(App\Noe_Team::count()); ?> Registered Choral Groups For NOE 2019 </h4>
              <p class="card-category">From Various state</p>
              
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="">
                        <th>
                        Group Name
                    </th>
                        <th>
                        Number
                        </th>
                        <th>
                        State
                        </th>
                        <th>
                            Title of Acappella Song
                        </th>
                                                <th>
                                                    Title of African Classical Song

                                                </th>
                                                <th>
                                                    Title of Acappella Contemporary Song

                                                </th>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    
    
                            <tr>
                                        
                            
                            <td>
                                <?php echo e($user->name); ?>

                            </td>
                            <td>
                            <?php echo e($user->number); ?>

                            </td>
                            
                            <td >
                            <?php echo e($user->state); ?>

                            </td>
                            <td >
                            <?php echo e($user->acappella); ?>

                            </td>
                            <td>
                                <?php echo e($user->african_class); ?>

                            </td>
                            <td>
                                <?php echo e($user->african_con); ?>

                            </td>
                            
                                <td><a href="noe_team/<?php echo e($user->id); ?>" class="btn btn-primary btn-md">View</a></td>                       
                            </tr>   
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.noe_adm', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>